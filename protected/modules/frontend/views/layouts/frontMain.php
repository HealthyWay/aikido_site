<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />
        <link rel="icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico" type="image/x-icon" />
        <!-- blueprint CSS framework -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/front/screen.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/front/print.css" media="print" />
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/front/ie.css" media="screen, projection" />
        <![endif]-->

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/front/main.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/front/form.css" />

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body>
        <div class="container">

            <div class="site-name"><?php echo CHtml::encode(Yii::app()->name); ?></div>

            <div id="mainmenu">

            </div><!-- mainmenu -->
            <div class="main">
                <div class="map">
                    <iframe width="425" height="325" frameborder="0" scrolling="yes" marginheight="0" marginwidth="0" src="https://maps.google.com.ua/maps?f=q&amp;source=s_q&amp;hl=ru&amp;geocode=&amp;q=%D1%83%D0%BB+%D0%93%D0%B0%D1%81%D1%82%D0%B5%D0%BB%D0%BB%D0%BE+11%2F13&amp;aq=&amp;sll=49.987204,36.273107&amp;sspn=0.224716,0.676346&amp;ie=UTF8&amp;hq=&amp;hnear=%D1%83%D0%BB.+%D0%93%D0%B0%D1%81%D1%82%D0%B5%D0%BB%D0%BB%D0%BE,+11%2F13,+%D0%A5%D0%B0%D1%80%D1%8C%D0%BA%D0%BE%D0%B2,+%D0%A5%D0%B0%D1%80%D1%8C%D0%BA%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F+%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C&amp;t=m&amp;ll=50.002278,36.266298&amp;spn=0.028688,0.036478&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.ua/maps?f=q&amp;source=embed&amp;hl=ru&amp;geocode=&amp;q=%D1%83%D0%BB+%D0%93%D0%B0%D1%81%D1%82%D0%B5%D0%BB%D0%BB%D0%BE+11%2F13&amp;aq=&amp;sll=49.987204,36.273107&amp;sspn=0.224716,0.676346&amp;ie=UTF8&amp;hq=&amp;hnear=%D1%83%D0%BB.+%D0%93%D0%B0%D1%81%D1%82%D0%B5%D0%BB%D0%BB%D0%BE,+11%2F13,+%D0%A5%D0%B0%D1%80%D1%8C%D0%BA%D0%BE%D0%B2,+%D0%A5%D0%B0%D1%80%D1%8C%D0%BA%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F+%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C&amp;t=m&amp;ll=50.002278,36.266298&amp;spn=0.028688,0.036478&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">Просмотреть увеличенную карту</a></small>
                </div>
                <div class="invite">
                    Объявлен набор во взрослую (от 16 лет) и в детскую (от 8 до 15 лет) группы <strong>Есинкан Айкидо</strong>.<br> У вас есть возможность постичь тайны японского будо, стать более сильными и здоровыми.
                    <span class="addres">
                        Мы находимся по адресу:
                       <img width="20px" height="20px" src="<?php echo Yii::app()->request->baseUrl; ?>/images/metro.png"> "Киевская" ул. Гастелло 11/13 Школа №110, 
                        </span>
                        <span class="contacts">
                        Антоненко Артем Александрович
                        <span class="phone">
                            тел. 067 578 67 50
                        </span>
                    </span>
                    <span class="contacts2">
                        Федорищев Владислав Александрович
                        <span class="phone">
                            тел 099 0788 211
                        </span>
                    </span>
                </div>
            </div>
            <div class="baseinfo">
                <span class="info-content">
                    В данный момент сайт находится на стадии разработки, для получения новостей по проекту, пожалуйста, заполните форму подписки
                </span>
            </div>

            <?php /* if(isset($this->breadcrumbs)):?>
              <?php $this->widget('zii.widgets.CBreadcrumbs', array(
              'links'=>$this->breadcrumbs,
              )); ?><!-- breadcrumbs -->
              <?php endif */ ?>
                <?php echo $content; ?>

                <div class="clear"></div>

                <div id="footer">
                    Copyright &copy; <?php echo date('Y'); ?> by Healthy Way. All Rights Reserved.
                    <?php //echo Yii::powered(); ?>
                </div><!-- footer -->


    </body>
</html>
