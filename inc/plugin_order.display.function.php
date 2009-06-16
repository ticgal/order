<?php
/*----------------------------------------------------------------------
   GLPI - Gestionnaire Libre de Parc Informatique
   Copyright (C) 2003-2008 by the INDEPNET Development Team.

   http://indepnet.net/   http://glpi-project.org/
   ----------------------------------------------------------------------
   LICENSE

   This file is part of GLPI.

   GLPI is free software; you can redistribute it and/or modify
   it under the terms of the GNU General Public License as published by
   the Free Software Foundation; either version 2 of the License, or
   (at your option) any later version.

   GLPI is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
   GNU General Public License for more details.

   You should have received a copy of the GNU General Public License
   along with GLPI; if not, write to the Free Software
   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
   ----------------------------------------------------------------------*/
/*----------------------------------------------------------------------
    Original Author of file: 
    Purpose of file:
    ----------------------------------------------------------------------*/
 
/* show form of linking order to glpi items */
function showItem($instID,$search='') {
	global $DB,$CFG_GLPI, $LANG,$INFOFORM_PAGES,$LINK_ID_TABLE;
		if (!plugin_order_haveRight("order","r"))	return false;
		$rand=mt_rand();
		$plugin_order=new PluginOrder();
		if ($plugin_order->getFromDB($instID)){
			$canedit=$plugin_order->can($instID,'w'); 
			$query = "SELECT DISTINCT device_type 
						FROM glpi_plugin_order_device 
						WHERE FK_order = '$instID' 
						ORDER BY device_type";
			$result = $DB->query($query);
			$number = $DB->numrows($result);
			$i = 0;
			if (isMultiEntitiesMode()) {
				$colsup=1;
			}else {
				$colsup=0;
			}
			echo "<form method='post' name='order_form$rand' id='order_form$rand'  action=\"".$CFG_GLPI["root_doc"]."/plugins/order/front/plugin_order.form.php\">";
			echo "<div class='center'><table class='tab_cadre_fixe'>";
			if($number==0)
			{
				echo "<tr><th colspan='".($canedit?(5+$colsup):(4+$colsup))."'>".$LANG['plugin_order']['item'][3]."</th></tr></table></div></form>";
			}
			else
			{
				echo "<tr><th colspan='".($canedit?(5+$colsup):(4+$colsup))."'>".$LANG['plugin_order']['item'][0].":</th></tr><tr>";
				/*if ($canedit) {
					echo "<th>&nbsp;</th>";
				}*/
				
				echo "<th>".$LANG['common'][17]."</th>";
				echo "<th>".$LANG['common'][16]."</th>";
				if (isMultiEntitiesMode())
					echo "<th>".$LANG['entity'][0]."</th>";
				echo "<th>".$LANG['common'][19]."</th>";
				echo "<th>".$LANG['common'][20]."</th>";
				echo "</tr>";
			
				$ci=new CommonItem();
				while ($i < $number) {
					$type=$DB->result($result, $i, "device_type");
					if (haveTypeRight($type,"r")){
						$column="name";
						if ($type==TRACKING_TYPE) $column="ID";
						if ($type==KNOWBASE_TYPE) $column="question";

						$query = "SELECT ".$LINK_ID_TABLE[$type].".*, glpi_plugin_order_device.ID AS IDD, glpi_entities.ID AS entity "
						." FROM glpi_plugin_order_device, ".$LINK_ID_TABLE[$type]
						." LEFT JOIN glpi_entities ON (glpi_entities.ID=".$LINK_ID_TABLE[$type].".FK_entities) "
						." WHERE ".$LINK_ID_TABLE[$type].".ID = glpi_plugin_order_device.FK_device 
						AND glpi_plugin_order_device.device_type='$type' 
						AND glpi_plugin_order_device.FK_order = '$instID' "
						. getEntitiesRestrictRequest(" AND ",$LINK_ID_TABLE[$type],'','',isset($CFG_GLPI["recursive_type"][$type])); 

						if (in_array($LINK_ID_TABLE[$type],$CFG_GLPI["template_tables"])){
							$query.=" AND ".$LINK_ID_TABLE[$type].".is_template='0'";
						}
						$query.=" ORDER BY glpi_entities.completename, ".$LINK_ID_TABLE[$type].".$column";
						
						if ($result_linked=$DB->query($query))
							if ($DB->numrows($result_linked)){
								$ci->setType($type);
								while ($data=$DB->fetch_assoc($result_linked)){
									$ID="";
									if ($type==TRACKING_TYPE) $data["name"]=$LANG['job'][38]." ".$data["ID"];
									if ($type==KNOWBASE_TYPE) $data["name"]=$data["question"];
									
									if($_SESSION["glpiview_ID"]||empty($data["name"])) $ID= " (".$data["ID"].")";
									$name= "<a href=\"".$CFG_GLPI["root_doc"]."/".$INFOFORM_PAGES[$type]."?ID=".$data["ID"]."\">"
										.$data["name"]."$ID</a>";
			
									echo "<tr class='tab_bg_1'>";

									/*if ($canedit){
										echo "<td width='10'>";
										$sel="";
										if (isset($_GET["select"])&&$_GET["select"]=="all") $sel="checked";
										echo "<input type='checkbox' name='item[".$data["IDD"]."]' value='1' $sel>";
										echo "</td>";
									}*/
									echo "<td class='center'>".$ci->getType()."</td>";
									
									echo "<td class='center' ".(isset($data['deleted'])&&$data['deleted']?"class='tab_bg_2_2'":"").">".$name."</td>";
									if (isMultiEntitiesMode())
										echo "<td class='center'>".getDropdownName("glpi_entities",$data['entity'])."</td>";
									echo "<td class='center'>".(isset($data["serial"])? "".$data["serial"]."" :"-")."</td>";
									echo "<td class='center'>".(isset($data["otherserial"])? "".$data["otherserial"]."" :"-")."</td>";
									echo "</tr>";
								}
							}
					}
					$i++;
				}
			
				/*if ($canedit)	{
					echo "<tr class='tab_bg_1'><td colspan='".(3+$colsup)."' class='center'>";
			
					echo "<input type='hidden' name='conID' value='$instID'>";
					$types[]=COMPUTER_TYPE;
					$types[]=NETWORKING_TYPE;
					$types[]=PRINTER_TYPE;
					$types[]=MONITOR_TYPE;
					$types[]=PERIPHERAL_TYPE;
					$types[]=CARTRIDGE_ITEM_TYPE;
					$types[]=CONSUMABLE_ITEM_TYPE;
					dropdownAllItems("item",0,0,($plugin_order->fields['recursive']?-1:$plugin_order->fields['FK_entities']),$types);
					
					echo "</td>";
					echo "<td colspan='2' class='center' class='tab_bg_2'>";
					echo "<input type='submit' name='additem' value=\"".$LANG['buttons'][8]."\" class='submit'>";
					echo "</td></tr>";
					echo "</table></div>" ;
					
					echo "<div class='center'>";
					echo "<table width='80%' class='tab_glpi'>";
					echo "<tr><td><img src=\"".$CFG_GLPI["root_doc"]."/pics/arrow-left.png\" alt=''></td><td class='center'><a onclick= \"if ( markCheckboxes('order_form$rand') ) return false;\" href='".$_SERVER['PHP_SELF']."?ID=$instID&amp;select=all'>".$LANG['buttons'][18]."</a></td>";
				
					echo "<td>/</td><td class='center'><a onclick= \"if ( unMarkCheckboxes('order_form$rand') ) return false;\" href='".$_SERVER['PHP_SELF']."?ID=$instID&amp;select=none'>".$LANG['buttons'][19]."</a>";
					echo "</td><td align='left' width='80%'>";
					echo "<input type='submit' name='deleteitem' value=\"".$LANG['buttons'][6]."\" class='submit'>";
					echo "</td>";
					echo "</table>";
					echo "</div>";
				}else{*/
					echo "</table></div>";
				//}
				echo "</form>";
			}
		}
}

/* show details of orders */
function showDetail($target,$ID)
{
	$plugin_order_detail = new PluginOrderDetail();
	$plugin_order_detail->showFormDetail($target, $ID);
	$plugin_order_detail->showAddForm($target, $ID);
}
?>