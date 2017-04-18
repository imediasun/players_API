<!--MAIN NAVIGATION-->
<!--===================================================-->
<nav id="mainnav-container">
    <div id="mainnav">

        <!--Menu-->
        <!--================================-->
        <div id="mainnav-menu-wrap">
            <div class="nano">
                <div class="nano-content">

                    <ul id="mainnav-menu" class="list-group" style="background:#1b232a">


                        <?
                        class Recursion
                        {
                            public $level;
                            public $lang = 'en';

                            public function get_cat($menu)
                            {

                                if (!$menu) {
                                    return NULL;
                                }
                                $arr_cat = array();
                                if (count($menu) != 0) {

                                    //В цикле формируем массив

                                    foreach ($menu as $key => $row) {

                                        //Формируем массив где ключами являются адишники на родительские категории
                                        if (empty($arr_cat[$row->parent_id])) {
                                            $arr_cat[$row->parent_id] = array();
                                        }
                                        $arr_cat[$row->parent_id][] = $row;
                                    }


                                    //возвращаем массив
                                    return $arr_cat;
                                }
                            }


                            //вывод каталогa с помощью рекурсии
                            public function view_cat($arr, $parent_id = 0, $level ) {

                                //Условия выхода из рекурсии
                                if (empty($arr[$parent_id])) {
                                    return;
                                }
                                if($parent_id !== 0) {
                                    echo '<ul class="collapse" >';
                                }
                                //перебираем в цикле массив и выводим на экран
                                for ($i = 0; $i < count($arr[$parent_id]); $i++) {



                                        echo '
                                          <li>
                                        <a href="'.$arr[$parent_id][$i]->link.'">';



                                    if($parent_id == 0){
                                        echo '<div class="icon_stat" style="position:relative;top:12px;display:inline-block;background-repeat:no-repeat;width:30px;height:30px;background-image:url('.$arr[$parent_id][$i]->icon.');"></div>';
                                    echo '<div class="icon_hover" style="position:relative;top:12px;display:none;background-repeat:no-repeat;width:30px;height:30px;background-image:url('.$arr[$parent_id][$i]->icon_hover.');"></div>';
                                    }


                                    if($parent_id == 0) {
                                        echo '
                                        <span class="menu-title">' . $arr[$parent_id][$i]->name . '</span>
                                        <i class="arrow"></i> 
                                        </a>';
                                    }
                                    else{
                                        echo '
                                        <span style="font-size:12px;color:#eee;" class="menu-title">' . $arr[$parent_id][$i]->name . '</span>
                                        <i class="arrow"></i> 
                                        </a>';
                                    }
                                    //рекурсия - проверяем нет ли дочерних категорий
                                    $this->view_cat($arr, $arr[$parent_id][$i]->id, 1);
                                    echo '</li> ';
                                }
                                if($parent_id !== 0) {
                                    echo '</ul>';
                                }
                            }
                        }
                        $rec= new Recursion;
                        $result = $rec->get_cat($menu);
                        //Выводи каталог на экран с помощью рекурсивной функции

                        $rec->view_cat($result,0,0);

                        ?>


                    </ul>


                    <!--Widget-->
                    <!--================================-->
                    <div class="mainnav-widget">

                        <!-- Show the button on collapsed navigation -->
                        <div class="show-small">
                            <a href="#" data-toggle="menu-widget" data-target="#demo-wg-server">
                                <i class="fa fa-desktop"></i>
                            </a>
                        </div>

                        <!-- Hide the content on collapsed navigation -->
                        <div id="demo-wg-server" class="hide-small mainnav-widget-content">
                            <ul class="list-group">
                                <li class="list-header pad-no pad-ver">Server Status</li>
                                <li class="mar-btm">
                                    <span class="label label-primary pull-right">15%</span>
                                    <p>CPU Usage</p>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-primary" style="width: 15%;">
                                            <span class="sr-only">15%</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="mar-btm">
                                    <span class="label label-purple pull-right">75%</span>
                                    <p>Bandwidth</p>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-purple" style="width: 75%;">
                                            <span class="sr-only">75%</span>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!--================================-->
                    <!--End widget-->

                </div>
            </div>
        </div>
        <!--================================-->
        <!--End menu-->

    </div>
</nav>

<script>

    $('#mainnav-menu li').hover(function(){

     $(this).find('.icon_stat').css('display','none')
     $(this).find('.icon_hover').css('display','inline-block')
    },function(){
    $(this).find('.icon_stat').css('display','inline-block')
    $(this).find('.icon_hover').css('display','none')

    })
</script>
<!--===================================================-->
<!--END MAIN NAVIGATION-->