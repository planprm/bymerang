<?php
      header("Content-Type: text/html; charset=utf-8");
      if(isset($_POST["submit"]))
      {
            function showcatalog()
            {
                  echo "<h1>Товары</h1>";
            }
            $value = $_POST["submit"];
            if($value="Товар")
            {
                  showcatalog();
            }

            
            echo "amir";
           
      }
?>
<!DOCTYPE html>
<head>
      <title>HelloShop - @amirismagilov @ismagilovamir @AmirIsmagilov Исмагилов А.З., Обо мне, Студент УГАТУ</title>
      <meta name="description" content="HelloShop - @amirismagilov @ismagilovamir @AmirIsmagilov Исмагилов А.З., Обо мне, Студент УГАТУ">
      <meta name="yandex-verification" content="5f5efc0dde0f0423" />
      <meta charset="utf-8"/>
</head>

<body>
    <h1>Поиск по элементам</h1></br>
    <input name="searchelements" text"/>
    
    <?php 
        echo "<h1>Hello Shop!</h1>";
        echo "<p>I'm Ismagilov Amir Zakirovich Student USATU using Heroku with Github!</p>";
        echo "<p>Я Исмагилов Амир Закирович Студент УГАТУ ФИРТ Программная Инженерия ПРО-403</p>";
        echo "<p>О себе:</p>";
        echo "<p>Знаю Интернет-Технологии: php, python django, python flask, apache, mysql, html, css</p>";
        echo "<p>Ищу подработку, ищу удаленную работу.</p>";
        echo "<p>Умею шифровать sha-1.</p>";
        echo "<p>Знаю C/C++, python, php, html, css, javascript, C#.</p>";
        echo "<p>Умею писать bash-скрипты, bacth-файлы.</p>";
        echo "<p>К примеру bash-скрипт, Вас удивит:</p>";
        echo '<form method="POST" action="https://helloshop.herokuapp.com">';
        echo 'Поиск:<input name="search" value="Товары"> ';
        echo '<input name="submit" type="submit" value="Поиск"></br>';
        echo '</form>';
        echo "echo Hello, World!</br>";
        echo "echo echo Hello,World!</br>";
        echo "echo $ACCUMULATOR</br>";
        echo "echo $$</br>";
        echo  "echo $MATCH</br>";
        echo "</p>";
        echo "<p>145.255.3.111</p>";
        echo "https://helloshop.herokuapp.com/";
        echo "https//snoocppy.github.io/";
        echo "<h3>Contacts</h3>";
        echo "<p>email: progamailism@yandex.ru</p>";
        echo "<p>Facebook: @ismagilovamir</p>";
        echo "<p>Twitter: @AmirIsmagilov</p>";
        echo "<p>VK | Vkontakte: @amirismagilov</p>";
        echo "<p><a href='helloshop.herokuapp.com'>helloshop.herokuapp.com</a></p>";
        echo "<h3>Sha 1 Sum</h3>";
        echo "<p>013fecbdacf7b09a9a8ca41472efd7fb5cb1ea98(sha-1)</p>";
        echo "<p>ce022b63ad00c614803afb41696e859f95d17afe(sha-1)</p>";
        echo "<p>bc770b5225d82f43f4ffdb2eb60675c29fca4794(sha-1)</p>";
        echo "<p>1ab29cf74bab9257afddb3d3573f77b49987809a(sha-1)</p>";
     ?>
</body>

</html>
