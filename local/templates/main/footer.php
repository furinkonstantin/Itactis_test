<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? 
    use Bitrix\Main\Type\DateTime;
    
    $objDateTime = new DateTime();
?>
                    </div>
                </div>
                <div class="sb_sidebar">
					<?
                        $APPLICATION->IncludeComponent("bitrix:menu", "menu_left", array(
                                "ROOT_MENU_TYPE" => "left",
                                "CHILD_MENU_TYPE" => "left_child", 
                                "MENU_CACHE_TYPE" => "A",
                                "MENU_CACHE_TIME" => "36000000",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "MENU_CACHE_GET_VARS" => array(),
                                "MAX_LEVEL" => "3",
                                "USE_EXT" => "Y",
                                "ALLOW_MULTI_SELECT" => "Y"
                            )
                        );
                    ?>
					<!--<div class="sb_event">
						<div class="sb_event_header"><h4>Ближайшие события</h4></div>
						<p><a href="">29 августа 2012, Москва</a></p>
						<p>Семинар производителей мебели России и СНГ, Обсуждение тенденций.</p>
					</div>-->
					
					<div class="sb_event">
						<div class="sb_event_header"><h4>Информация</h4></div>
						<p>Семинар производителей мебели России и СНГ, Обсуждение тенденций.</p>
					</div>
					
					<div class="sb_action">
						<a href=""><img src="<?=SITE_TEMPLATE_PATH?>/content/11.png" alt=""/></a>
						<h4>Акция</h4>
						<h5><a href="">Мебельная полка всего за 560 Р</a></h5>
						<a href="" class="sb_action_more">Подробнее &rarr;</a>
					</div>
					<div class="sb_reviewed">
							<img src="<?=SITE_TEMPLATE_PATH?>/content/8.png" class="sb_rw_avatar" alt=""/>
							<span class="sb_rw_name">Сергей Антонов</span>
							<span class="sb_rw_job">Руководитель финансового отдела “Банк+”</span>
							<p>“Покупал офисные стулья и столы, остался очень доволен! Низкие цены, быстрая доставка, обслуживание на высоте! Спасибо!”</p>
							<div class="clearboth"></div>
							<div class="sb_rw_arrow"></div>
					</div>
				</div>
				<div class="clearboth"></div>
			</div>
		</div>

		<div class="ft_footer">
			<div class="ft_container">
				<div class="ft_about">
					<h4>О магазине</h4>
                    <?
                        $APPLICATION->IncludeComponent("bitrix:menu", "bottom", array(
                                "ROOT_MENU_TYPE" => "bottom_1",
                                "CHILD_MENU_TYPE" => "", 
                                "MENU_CACHE_TYPE" => "A",
                                "MENU_CACHE_TIME" => "36000000",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "MENU_CACHE_GET_VARS" => array(),
                                "MAX_LEVEL" => "1",
                                "USE_EXT" => "N",
                                "ALLOW_MULTI_SELECT" => "Y"
                            )
                        );
                    ?>
				</div>
				 <div class="ft_catalog">
					<h4>Каталог товаров</h4>
                    <?
                        $APPLICATION->IncludeComponent("bitrix:menu", "bottom", array(
                                "ROOT_MENU_TYPE" => "bottom_2",
                                "CHILD_MENU_TYPE" => "", 
                                "MENU_CACHE_TYPE" => "A",
                                "MENU_CACHE_TIME" => "36000000",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "MENU_CACHE_GET_VARS" => array(),
                                "MAX_LEVEL" => "1",
                                "USE_EXT" => "N",
                                "ALLOW_MULTI_SELECT" => "Y"
                            )
                        );
                    ?>
				</div> 
				<div class="ft_contacts">
					<h4>Контактная информация</h4>
					<!-- vCard        http://help.yandex.ru/webmaster/hcard.pdf      -->
					<p class="vcard">
						<span class="adr">
							<span class="street-address">ул. Летняя стр.12, офис 512</span>
						</span>
                        <?
                            $APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/footer/phone.php"), false);
                        ?>
						<strong>Время работы:</strong> <br/> <span class="workhours">ежедневно с 9-00 до 18-00</span><br/>
					</p>
					<ul class="ft_solcial">
						<li><a href="" class="fb"></a></li>
						<li><a href="" class="tw"></a></li>
						<li><a href="" class="ok"></a></li>
						<li><a href="" class="vk"></a></li>
					</ul>
					<div class="ft_copyright">© 2000 - <?=$objDateTime->format("Y");?> "Мебельный магазин" </div>
					
					
				</div>
				
				<div class="clearboth"></div>
			</div>
		</div>
	</div>
</body>
</html>