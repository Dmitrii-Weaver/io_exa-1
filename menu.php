<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="mystyle.css">
        <script src="./js/myfunctions.js" charset="utf-8"></script>

    </head>
    <body>
        <div id=header>
            <p>HEADER</p>   
        </div>
        <div id=menu>


        <ul>
        <li> <a href="#" onclick="loadDoc('page1.html')">Page1</a> </li>    
        <li> <a href="#" onclick="loadDoc('page2.html')">Page2</a> </li>
        <li> <a href="#" onclick="loadDoc('page3.php')">Page3</a> </li>
        <li> <a href="#" onclick="loadDoc('forms.html')">forms</a> </li>
        </ul>
            <p>MENU</p>

            </div>
            <div id=content>
                <p>CONTENTS</p>
            </div>
            <div id=footer>
                <p>FOOTER</p>
            </div>

            <?php
            $counter=0;
            echo 'the "value" of the counter is '.counter;
            echo '<br>';
            echo 'the \"value\"" of the counter is $counter';
            for ($counter=0; $counter<=10; $counter++){
                echo 'this is fine '.$counter.'<br>';
            }
            ?>
            <h2>ARRAY</h2>
            <?php
            $fnames=array('Lisa', 'Hooisa', '   bobby   ');
            echo 'the second name is '.$fnames[1];
            ?>
            <p>AND NOW ALL NAMES</p>
            <?php
            print_r($fnames);
            ?>
            <p>NAMESNAMESMN</p>
            <?php 
            foreach($fnames as $row) {
                echo '<li>'.$row.'<li>';
            } 
            ?>
            <p>ASDAWD</p>
            <?php 
            $names=array (
                array('1', '2'),
                array('3', '4'));
                print_r($names)
                ?>
            <ul>
                <?php 
                foreach ($names as $row){
                    echo '<li>'.$row[0].' '.$row[1].'</li>';
                }
                ?>
            </ul>
            <h2>ass array</h2>
            <?php 
            $assarray=array(
                array('fname'=>'lisa','lname'=>'Smith'),
                array('fname'=>'john', 'lname'=>'Doe')
            );
            print_r($assarray) 
            ?>
            <ul>
                <?php 
                foreach($assarray as $name) {
                    echo '<li>'.$name['fname'].' '.$name['lname'].'</li>';
                }
                ?>
            </ul>
    </body>
</html>