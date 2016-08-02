<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />
        <link rel="shortcut icon" href="<?php //echo Yii::app()->request->baseUrl; ?>/images/logo.ico" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" href="<?php //echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />
        
        
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>

        <?php // Yii::app()->bootstrap->init(); ?>
    </head>

    <body>

        <?php
        //$user = TbUser::model()->findByAttributes(array('id_user' => Yii::app()->user->id));
        //$author = TbAuthorBranchOffice::model()->findByAttributes(array('id_user' => $user->id_user));
        $this->widget(
    'booster.widgets.TbNavbar',
    array(
        'type' => 'inverse',
        'brand' => 'Project name',
        'brandUrl' => '#',
        'collapse' => true, // requires bootstrap-responsive.css
        'fixed' => false,
        'fluid' => true,
        'items' => array(
            array(
                'class' => 'booster.widgets.TbMenu',
                'type' => 'navbar',
                'items' => array(
                    array('label' => 'Home', 'url' => 'index.php?r=site/index'),
                    array('label' => 'Office', 'url' => 'index.php?r=tbOffice/admin'),
                    array('label' => 'Register Office', 'url' => 'index.php?r=tbAuthorBranchOffice/Registration','visible'=> Yii::app()->user->name == "admin"),
                    array('label' => 'Spare', 'url' => 'index.php?r=tbSpare/admin'),
                    array('label' => 'Request', 'url' => 'index.php?r=tbSnSpare/request','visible'=>!Yii::app()->user->isGuest),
                    array(
                        'label' => 'View Request','visible'=>!Yii::app()->user->isGuest,
                        'url' => '#',
                        'items' => array(
                            array('label' => 'My Request', 'url' => 'index.php?r=tbRequest/index'),
                            array('label' => 'Request For Me', 'url' => 'index.php?r=tbRequest/index2'),
//                            array(
//                                'label' => 'Something else here',
//                                'url' => '#'
//                            ),
//                            '---',
//                            array('label' => 'NAV HEADER'),
//                            array('label' => 'Separated link', 'url' => '#'),
//                            array(
//                                'label' => 'One more separated link',
//                                'url' => '#'
//                            ),
                        )
                    ),
                ),
            ),
            //'<form class="navbar-form navbar-left" action=""><div class="form-group"><input type="text" class="form-control" placeholder="Search"></div></form>',
            array(
                'class' => 'booster.widgets.TbMenu',
                'type' => 'navbar',
                'htmlOptions' => array('class' => 'pull-right'),
                'items' => array(
                    '---',
                    array('label' => 'Hello Guest','url'=>'','visible'=> Yii::app()->user->isGuest),
                    array('label' =>  'Hello '. Yii::app()->user->name,'url'=>'index.php?r=tbAuthorBranchOffice/view&id='.Yii::app()->user->id,'visible'=> !Yii::app()->user->isGuest),
                    array('label' => 'Login', 'url' => 'index.php?r=site/login','visible'=> Yii::app()->user->isGuest),
                    array('label' => 'Logout', 'url' => 'index.php?r=site/logout','visible'=> !Yii::app()->user->isGuest),
                    array(
                        'label' => 'Dropdown',
                        'url' => '#',
                        'items' => array(
                            array('label' => 'Action', 'url' => '#'),
                            array('label' => 'Another action', 'url' => '#'),
                            array(
                                'label' => 'Something else here',
                                'url' => '#'
                            ),
                            '---',
                            array('label' => 'Separated link', 'url' => '#'),
                        )
                    ),
                ),
            ),
        ),
    )
);
        ?>

        <?php //$this->renderPartial('//site/dialog'); ?>
        <div class="container" id="page">

            <?php if (isset($this->breadcrumbs)): ?>
                <?php
//                $this->widget('booster.widgets.TbBreadcrumbs', array(
//                    'links' => $this->breadcrumbs,
//                ));
//                ?><!-- breadcrumbs -->
            <?php endif ?>

            <?php echo $content; ?>
            
            <div class="clear"></div>

            <div id="footer">
                Copyright &copy; <?php echo date('Y'); ?> <br/>by PT. NEC Indonesia

            </div><!-- footer -->

        </div><!-- page -->

    </body>
</html>
