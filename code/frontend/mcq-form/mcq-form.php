<!--
    Title: mcq-form page
    Auhtor: Nafisa Maliyat
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Page</title>
    <link rel="stylesheet" href="mcq-form.css">
    <link rel="stylesheet" href="navbar-timer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="shortcut icon" href="../favicon.ico">
</head>
<script type="text/javascript" src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
<body>

    <!--
        reference for fetching question text & image, 
        answer option (four each) and their image(if any)
        
        id of total score: total-score
        id of topic name: topic-name

        id of question text: 
        question-1-text
        question-2-text
        question-3-text
        question-4-text
        question-5-text
        question-6-text
        question-7-text
        question-8-text
        question-9-text
        question-10-text



        id of question image
        question-1-image
        question-2-image
        question-3-image
        question-4-image
        question-5-image
        question-6-image
        question-7-image
        question-8-image
        question-9-image
        question-10-image



        id of radio buttons (the circle portion of the option)
        one-one
        one-two
        .
        .
        .
        ten-three
        ten-four



        id of images in option format
        question-1-img-option-a
        question-1-img-option-b
        question-1-img-option-c
        question-1-img-option-d
        question-2-img-option-a
        .
        .
        .
        question-10-img-option-d



        

    -->

    <div class="navbar sticky-top" id="navbar">

        <!--logo-->
        <div class="logo">
        <img src="../favicon.png" >     TENTO
            
        </div>

        <span id="timer">
            <span id="time"></span>
        </span>
        
    </div>

    <div class="container mb-5">


        <!--insert topic name here-->
        <h1 id="topic-name">
        <?php
           $servername = "localhost";
           $username = "root";
           $password = "Kji1357924680";
           $dbname = "tentodatabase";
           $conn = new mysqli($servername, $username, $password, $dbname);
           if ($conn->connect_error) {
                 die("Connection failed: " . $conn->connect_error);
                }
           $sql = "SELECT * FROM topics WHERE TopicID=402402";
           $result = $conn->query($sql);
           while($row = $result->fetch_assoc()) 
           {
               echo $row["TopicName"]. "<br>";
           }
           $conn->close();
        ?>
        </h1>


        <h6 id="total-score">Total score: 10</h6>
        <hr>
        <div class="row">


            <!--question1-->
            <form class="question1">
                <div class="col-12">
                    <p class="fw-bold">
                    <div class="question-text" id="question-1-text">
        <?php
           $servername = "localhost";
           $username = "root";
           $password = "Kji1357924680";
           $dbname = "tentodatabase";
           $conn = new mysqli($servername, $username, $password, $dbname);
           if ($conn->connect_error) {
                 die("Connection failed: " . $conn->connect_error);
                }
           $sql = "SELECT * FROM questions WHERE QuestionID=40240214";
           $result = $conn->query($sql);
           while($row = $result->fetch_assoc()) 
           {
               echo "1. ".$row["QuestionText"]. "<br>";
           }
           $conn->close();
        ?>
                     </div>
                    <p>
                        <!--<img id="question-1-img" class="question-image" id="question-1-image" src="sample-question-1.png" alt="">-->
                        <img class="question-image" alt="" id="question-image">
        <?php
           $servername = "localhost";
           $username = "root";
           $password = "Kji1357924680";
           $dbname = "tentodatabase";
           $conn = new mysqli($servername, $username, $password, $dbname);
           if ($conn->connect_error) {
                 die("Connection failed: " . $conn->connect_error);
                }
           $sql = "SELECT * FROM questions WHERE QuestionID=40240101";
           $result = $conn->query($sql);
           while($row = $result->fetch_assoc()) 
           {
               echo $row["QuestionPicture"]. "<br>";
           }
           $conn->close();
        ?>            
                    </p>
                    </p>
                    <div>
                        <input type="radio" name="box-1" id="one-one" value="0.071">
                        <input type="radio" name="box-1" id="one-two" value="0.072">
                        <input type="radio" name="box-1" id="one-three" value="0.07">
                        <input type="radio" name="box-1" id="one-four" value="0.0">

                        <label for="one-one" class="box one-one">
                            <div class="course">
                                <span class="circle"></span>
                                <span class="subject">
        <?php
           $servername = "localhost";
           $username = "root";
           $password = "Kji1357924680";
           $dbname = "tentodatabase";
           $conn = new mysqli($servername, $username, $password, $dbname);
           if ($conn->connect_error) {
                 die("Connection failed: " . $conn->connect_error);
                }
           $sql = "SELECT * FROM choices WHERE QuestionID=40240101";
           $result = $conn->query($sql);
           while($row = $result->fetch_assoc()) 
           {
               echo $row["ChoiceAText"];
           }
           $conn->close();
        ?>            
                                    <img id="question-1-img-option-a" alt="">
                                </span>
                            </div>
                        </label>

                        <label for="one-two" class="box one-two">
                            <div class="course">
                                <span class="circle"></span>
                                <span class="subject">
        <?php
           $servername = "localhost";
           $username = "root";
           $password = "Kji1357924680";
           $dbname = "tentodatabase";
           $conn = new mysqli($servername, $username, $password, $dbname);
           if ($conn->connect_error) {
                 die("Connection failed: " . $conn->connect_error);
                }
           $sql = "SELECT * FROM choices WHERE QuestionID=40240101";
           $result = $conn->query($sql);
           while($row = $result->fetch_assoc()) 
           {
               echo $row["ChoiceBText"];
           }
           $conn->close();
        ?>            
                                    <img id="question-1-img-option-b" alt="">
                                </span>
                            </div>
                        </label>

                        <label for="one-three" class="box one-three">
                            <div class="course">
                                <span class="circle"></span>
                                <span class="subject">
        <?php
           $servername = "localhost";
           $username = "root";
           $password = "Kji1357924680";
           $dbname = "tentodatabase";
           $conn = new mysqli($servername, $username, $password, $dbname);
           if ($conn->connect_error) {
                 die("Connection failed: " . $conn->connect_error);
                }
           $sql = "SELECT * FROM choices WHERE QuestionID=40240101";
           $result = $conn->query($sql);
           while($row = $result->fetch_assoc()) 
           {
               echo $row["ChoiceCText"];
           }
           $conn->close();
        ?>            
                                    <img id="question-1-img-option-c" alt="">
                                </span>
                            </div>
                        </label>

                        <label for="one-four" class="box one-four">
                            <div class="course">
                                <span class="circle"></span>
                                <span class="subject">
        <?php
           $servername = "localhost";
           $username = "root";
           $password = "Kji1357924680";
           $dbname = "tentodatabase";
           $conn = new mysqli($servername, $username, $password, $dbname);
           if ($conn->connect_error) {
                 die("Connection failed: " . $conn->connect_error);
                }
           $sql = "SELECT * FROM choices WHERE QuestionID=40240101";
           $result = $conn->query($sql);
           while($row = $result->fetch_assoc()) 
           {
               echo $row["ChoiceDText"];
           }
           $conn->close();
        ?>            
                                </span>
                                <img id="question-1-img-option-d" alt="">
                            </div>
                        </label>

                    </div>

                </div>
            </form>

        </div>






        <!--question2-->
        <div class="row">
            <form class="question2" >
                <div class="col-12">
                    <p class="fw-bold">
                    <div class="question-text" id ="question-2-text">
        <?php
           $servername = "localhost";
           $username = "root";
           $password = "Kji1357924680";
           $dbname = "tentodatabase";
           $conn = new mysqli($servername, $username, $password, $dbname);
           if ($conn->connect_error) {
                 die("Connection failed: " . $conn->connect_error);
                }
           $sql = "SELECT * FROM questions WHERE QuestionID=40240102";
           $result = $conn->query($sql);
           while($row = $result->fetch_assoc()) 
           {
               echo "2. ".$row["QuestionText"]. "<br>";
           }
           $conn->close();
        ?>
                    </div>
                    <p>
                        <!--<img src="sample-question-2.png" class="question-image" id="question-2-image" alt="">-->
                        <img class="question-image" alt="" id="question-image">
        <?php
           $servername = "localhost";
           $username = "root";
           $password = "Kji1357924680";
           $dbname = "tentodatabase";
           $conn = new mysqli($servername, $username, $password, $dbname);
           if ($conn->connect_error) {
                 die("Connection failed: " . $conn->connect_error);
                }
           $sql = "SELECT * FROM questions WHERE QuestionID=40240102";
           $result = $conn->query($sql);
           while($row = $result->fetch_assoc()) 
           {
               echo $row["QuestionPicture"]. "<br>";
           }
           $conn->close();
        ?>
                    </p>
                    </p>


                    <div>
                        <input type="radio" name="box" id="two-one">
                        <input type="radio" name="box" id="two-two">
                        <input type="radio" name="box" id="two-three">
                        <input type="radio" name="box" id="two-four">


                        <label for="two-one" class="box two-one ">
                            <div class="course">
                                <span class="circle"></span>
                                <span class="subject">
        <?php
           $servername = "localhost";
           $username = "root";
           $password = "Kji1357924680";
           $dbname = "tentodatabase";
           $conn = new mysqli($servername, $username, $password, $dbname);
           if ($conn->connect_error) {
                 die("Connection failed: " . $conn->connect_error);
                }
           $sql = "SELECT * FROM choices WHERE QuestionID=40240102";
           $result = $conn->query($sql);
           while($row = $result->fetch_assoc()) 
           {
               echo $row["ChoiceAText"];
           }
           $conn->close();
        ?>            
                                    <img id="question-2-img-option-a" alt="">
                                </span>
                            </div>
                        </label>



                        <label for="two-two" class="box two-two">
                            <div class="course">
                                <span class="circle"></span>
                                <span class="subject">
        <?php
           $servername = "localhost";
           $username = "root";
           $password = "Kji1357924680";
           $dbname = "tentodatabase";
           $conn = new mysqli($servername, $username, $password, $dbname);
           if ($conn->connect_error) {
                 die("Connection failed: " . $conn->connect_error);
                }
           $sql = "SELECT * FROM choices WHERE QuestionID=40240102";
           $result = $conn->query($sql);
           while($row = $result->fetch_assoc()) 
           {
               echo $row["ChoiceBText"];
           }
           $conn->close();
        ?>                                             
                                    <img id="question-2-img-option-b" alt="">
                                </span>
                            </div>
                        </label>



                        <label for="two-three" class="box two-three">
                            <div class="course">
                                <span class="circle"></span>
                                <span class="subject">
        <?php
           $servername = "localhost";
           $username = "root";
           $password = "Kji1357924680";
           $dbname = "tentodatabase";
           $conn = new mysqli($servername, $username, $password, $dbname);
           if ($conn->connect_error) {
                 die("Connection failed: " . $conn->connect_error);
                }
           $sql = "SELECT * FROM choices WHERE QuestionID=40240102";
           $result = $conn->query($sql);
           while($row = $result->fetch_assoc()) 
           {
               echo $row["ChoiceCText"];
           }
           $conn->close();
        ?>         
                                    <img id="question-2-img-option-c" alt="">
                                </span>
                            </div>
                        </label>



                        <label for="two-four" class="box two-four">
                            <div class="course">
                                <span class="circle"></span>
                                <span class="subject">
        <?php
           $servername = "localhost";
           $username = "root";
           $password = "Kji1357924680";
           $dbname = "tentodatabase";
           $conn = new mysqli($servername, $username, $password, $dbname);
           if ($conn->connect_error) {
                 die("Connection failed: " . $conn->connect_error);
                }
           $sql = "SELECT * FROM choices WHERE QuestionID=40240102";
           $result = $conn->query($sql);
           while($row = $result->fetch_assoc()) 
           {
               echo $row["ChoiceDText"];
           }
           $conn->close();
        ?>         
                                    <img id="question-2-img-option-d" alt="">
                                </span>
                            </div>
                        </label>


                    </div>
                </div>

            </form>
        </div>








        <!--question3-->
        <div class="row">
            <form class="question3">
                <div class="col-12">
                    <p class="fw-bold">
                    <div class="question-text" id ="question-3-text">
        <?php
           $servername = "localhost";
           $username = "root";
           $password = "Kji1357924680";
           $dbname = "tentodatabase";
           $conn = new mysqli($servername, $username, $password, $dbname);
           if ($conn->connect_error) {
                 die("Connection failed: " . $conn->connect_error);
                }
           $sql = "SELECT * FROM questions WHERE QuestionID=40240103";
           $result = $conn->query($sql);
           while($row = $result->fetch_assoc()) 
           {
               echo "3. ".$row["QuestionText"]. "<br>";
           }
           $conn->close();
        ?>
                    </div>
                    <p>
                        <img class="question-image" alt="" id="question-3-image">
        <?php
           $servername = "localhost";
           $username = "root";
           $password = "Kji1357924680";
           $dbname = "tentodatabase";
           $conn = new mysqli($servername, $username, $password, $dbname);
           if ($conn->connect_error) {
                 die("Connection failed: " . $conn->connect_error);
                }
           $sql = "SELECT * FROM questions WHERE QuestionID=40240103";
           $result = $conn->query($sql);
           while($row = $result->fetch_assoc()) 
           {
               echo $row["QuestionPicture"]. "<br>";
           }
           $conn->close();
        ?>
                    </p>
                    </p>


                    <div>
                        <input type="radio" name="box" id="three-one">
                        <input type="radio" name="box" id="three-two">
                        <input type="radio" name="box" id="three-three">
                        <input type="radio" name="box" id="three-four">


                        <label for="three-one" class="box three-one ">
                            <div class="course">
                                <span class="circle"></span>
                                <span class="subject">
        <?php
           $servername = "localhost";
           $username = "root";
           $password = "Kji1357924680";
           $dbname = "tentodatabase";
           $conn = new mysqli($servername, $username, $password, $dbname);
           if ($conn->connect_error) {
                 die("Connection failed: " . $conn->connect_error);
                }
           $sql = "SELECT * FROM choices WHERE QuestionID=40240103";
           $result = $conn->query($sql);
           while($row = $result->fetch_assoc()) 
           {
               echo $row["ChoiceAText"];
           }
           $conn->close();
        ?>
                                    <img id="question-3-img-option-a" alt="">
                                </span>
                            </div>
                        </label>



                        <label for="three-two" class="box three-two">
                            <div class="course">
                                <span class="circle"></span>
                                <span class="subject">
        <?php
           $servername = "localhost";
           $username = "root";
           $password = "Kji1357924680";
           $dbname = "tentodatabase";
           $conn = new mysqli($servername, $username, $password, $dbname);
           if ($conn->connect_error) {
                 die("Connection failed: " . $conn->connect_error);
                }
           $sql = "SELECT * FROM choices WHERE QuestionID=40240103";
           $result = $conn->query($sql);
           while($row = $result->fetch_assoc()) 
           {
               echo $row["ChoiceBText"];
           }
           $conn->close();
        ?>
                                    <img id="question-3-img-option-b" alt="">
                                </span>
                            </div>
                        </label>



                        <label for="three-three" class="box three-three">
                            <div class="course">
                                <span class="circle"></span>
                                <span class="subject">
        <?php
           $servername = "localhost";
           $username = "root";
           $password = "Kji1357924680";
           $dbname = "tentodatabase";
           $conn = new mysqli($servername, $username, $password, $dbname);
           if ($conn->connect_error) {
                 die("Connection failed: " . $conn->connect_error);
                }
           $sql = "SELECT * FROM choices WHERE QuestionID=40240103";
           $result = $conn->query($sql);
           while($row = $result->fetch_assoc()) 
           {
               echo $row["ChoiceCText"];
           }
           $conn->close();
        ?>
                                    <img id="question-3-img-option-c" alt="">
                                </span>
                            </div>
                        </label>



                        <label for="three-four" class="box three-four">
                            <div class="course">
                                <span class="circle"></span>
                                <span class="subject">
        <?php
           $servername = "localhost";
           $username = "root";
           $password = "Kji1357924680";
           $dbname = "tentodatabase";
           $conn = new mysqli($servername, $username, $password, $dbname);
           if ($conn->connect_error) {
                 die("Connection failed: " . $conn->connect_error);
                }
           $sql = "SELECT * FROM choices WHERE QuestionID=40240103";
           $result = $conn->query($sql);
           while($row = $result->fetch_assoc()) 
           {
               echo $row["ChoiceDText"];
           }
           $conn->close();
        ?>
                                    <img id="question-3-img-option-d" alt="">
                                </span>
                            </div>
                        </label>


                    </div>
                </div>

            </form>
        </div>







        <!--question4-->
        <div class="row">
            <form class="question4">
                <div class="col-12">
                    <p class="fw-bold">
                    <div class="question-text" id ="question-4-text">
                        4. Question four text
                    </div>
                    <p>
                        <img class="question-image" alt="" id="question-4-image">
                    </p>
                    </p>


                    <div>
                        <input type="radio" name="box" id="four-one">
                        <input type="radio" name="box" id="four-two">
                        <input type="radio" name="box" id="four-three">
                        <input type="radio" name="box" id="four-four">


                        <label for="four-one" class="box four-one ">
                            <div class="course">
                                <span class="circle"></span>
                                <span class="subject">
                                    Option A
                                    <img id="question-4-img-option-a" alt="">
                                </span>
                            </div>
                        </label>



                        <label for="four-two" class="box four-two">
                            <div class="course">
                                <span class="circle"></span>
                                <span class="subject">
                                    Option B
                                    <img id="question-4-img-option-b" alt="">
                                </span>
                            </div>
                        </label>



                        <label for="four-three" class="box four-three">
                            <div class="course">
                                <span class="circle"></span>
                                <span class="subject">
                                    Option C
                                    <img id="question-4-img-option-c" alt="">
                                </span>
                            </div>
                        </label>



                        <label for="four-four" class="box four-four">
                            <div class="course">
                                <span class="circle"></span>
                                <span class="subject">
                                    Option D
                                    <img id="question-4-img-option-d" alt="">
                                </span>
                            </div>
                        </label>


                    </div>
                </div>

            </form>
        </div>




        <!--question5-->
        <div class="row">
            <form class="question5">
                <div class="col-12">
                    <p class="fw-bold">
                    <div class="question-text" id ="question-5-text">
                        5. Question five text
                    </div>
                    <p>
                        <img class="question-image" alt="" id="question-5-image">
                    </p>
                    </p>


                    <div>
                        <input type="radio" name="box" id="five-one">
                        <input type="radio" name="box" id="five-two">
                        <input type="radio" name="box" id="five-three">
                        <input type="radio" name="box" id="five-four">


                        <label for="five-one" class="box five-one ">
                            <div class="course">
                                <span class="circle"></span>
                                <span class="subject">
                                    Option A
                                    <img id="question-5-img-option-a" alt="">
                                </span>
                            </div>
                        </label>



                        <label for="five-two" class="box five-two">
                            <div class="course">
                                <span class="circle"></span>
                                <span class="subject">
                                    Option B
                                    <img id="question-5-img-option-b" alt="">
                                </span>
                            </div>
                        </label>



                        <label for="five-three" class="box five-three">
                            <div class="course">
                                <span class="circle"></span>
                                <span class="subject">
                                    Option C
                                    <img id="question-5-img-option-c" alt="">
                                </span>
                            </div>
                        </label>



                        <label for="five-four" class="box five-four">
                            <div class="course">
                                <span class="circle"></span>
                                <span class="subject">
                                    Option D
                                    <img id="question-5-img-option-d" alt="">
                                </span>
                            </div>
                        </label>


                    </div>
                </div>

            </form>
        </div>





        <!--question6-->
        <div class="row">
            <form class="question6">
                <div class="col-12">
                    <p class="fw-bold">
                    <div class="question-text" id ="question-6-text">
                        6. Question six text
                    </div>
                    <p>
                        <img class="question-image" alt="" id="question-6-image">
                    </p>
                    </p>


                    <div>
                        <input type="radio" name="box" id="six-one">
                        <input type="radio" name="box" id="six-two">
                        <input type="radio" name="box" id="six-three">
                        <input type="radio" name="box" id="six-four">


                        <label for="six-one" class="box six-one ">
                            <div class="course">
                                <span class="circle"></span>
                                <span class="subject">
                                    Option A
                                    <img id="question-6-img-option-a" alt="">
                                </span>
                            </div>
                        </label>



                        <label for="six-two" class="box six-two">
                            <div class="course">
                                <span class="circle"></span>
                                <span class="subject">
                                    Option B
                                    <img id="question-6-img-option-b" alt="">
                                </span>
                            </div>
                        </label>



                        <label for="six-three" class="box six-three">
                            <div class="course">
                                <span class="circle"></span>
                                <span class="subject">
                                    Option C
                                    <img id="question-6-img-option-c" alt="">
                                </span>
                            </div>
                        </label>



                        <label for="six-four" class="box six-four">
                            <div class="course">
                                <span class="circle"></span>
                                <span class="subject">
                                    Option D
                                    <img id="question-6-img-option-d" alt="">
                                </span>
                            </div>
                        </label>


                    </div>
                </div>

            </form>
        </div>





        <!--question7-->
        <div class="row">
            <form class="question7">
                <div class="col-12">
                    <p class="fw-bold">
                    <div class="question-text" id ="question-7-text">
                        7. Question seven text
                    </div>
                    <p>
                        <img class="question-image" alt="" id="question-7-image">
                    </p>
                    </p>


                    <div>
                        <input type="radio" name="box" id="seven-one">
                        <input type="radio" name="box" id="seven-two">
                        <input type="radio" name="box" id="seven-three">
                        <input type="radio" name="box" id="seven-four">


                        <label for="seven-one" class="box seven-one">
                            <div class="course">
                                <span class="circle"></span>
                                <span class="subject">
                                    Option A
                                    <img id="question-7-img-option-a" alt="">
                                </span>
                            </div>
                        </label>



                        <label for="seven-two" class="box seven-two">
                            <div class="course">
                                <span class="circle"></span>
                                <span class="subject">
                                    Option B
                                    <img id="question-7-img-option-b" alt="">
                                </span>
                            </div>
                        </label>



                        <label for="seven-three" class="box seven-three">
                            <div class="course">
                                <span class="circle"></span>
                                <span class="subject">
                                    Option C
                                    <img id="question-7-img-option-c" alt="">
                                </span>
                            </div>
                        </label>



                        <label for="seven-four" class="box seven-four">
                            <div class="course">
                                <span class="circle"></span>
                                <span class="subject">
                                    Option D
                                    <img id="question-7-img-option-d" alt="">
                                </span>
                            </div>
                        </label>


                    </div>
                </div>

            </form>
        </div>






        <!--question8-->
        <div class="row">
            <form class="question8">
                <div class="col-12">
                    <p class="fw-bold">
                    <div class="question-text" id ="question-8-text">
                        8. Question eight text
                    </div>
                    <p>
                        <img class="question-image" alt="" id="question-8-image">
                    </p>
                    </p>


                    <div>
                        <input type="radio" name="box" id="eight-one">
                        <input type="radio" name="box" id="eight-two">
                        <input type="radio" name="box" id="eight-three">
                        <input type="radio" name="box" id="eight-four">


                        <label for="eight-one" class="box eight-one">
                            <div class="course">
                                <span class="circle"></span>
                                <span class="subject">
                                    Option A
                                    <img id="question-8-img-option-a" alt="">
                                </span>
                            </div>
                        </label>



                        <label for="eight-two" class="box eight-two">
                            <div class="course">
                                <span class="circle"></span>
                                <span class="subject">
                                    Option B
                                    <img id="question-8-img-option-b" alt="">
                                </span>
                            </div>
                        </label>



                        <label for="eight-three" class="box eight-three">
                            <div class="course">
                                <span class="circle"></span>
                                <span class="subject">
                                    Option C
                                    <img id="question-8-img-option-c" alt="">
                                </span>
                            </div>
                        </label>



                        <label for="eight-four" class="box eight-four">
                            <div class="course">
                                <span class="circle"></span>
                                <span class="subject">
                                    Option D
                                    <img id="question-8-img-option-d" alt="">
                                </span>
                            </div>
                        </label>


                    </div>
                </div>

            </form>
        </div>





        <!--question9-->
        <div class="row">
            <form class="question9">
                <div class="col-12">
                    <p class="fw-bold">
                    <div class="question-text" id ="question-9-text">
                        9. Question nine text
                    </div>
                    <p>
                        <img class="question-image" alt="" id="question-9-image">
                    </p>
                    </p>


                    <div>
                        <input type="radio" name="box" id="nine-one">
                        <input type="radio" name="box" id="nine-two">
                        <input type="radio" name="box" id="nine-three">
                        <input type="radio" name="box" id="nine-four">


                        <label for="nine-one" class="box nine-one">
                            <div class="course">
                                <span class="circle"></span>
                                <span class="subject">
                                    Option A
                                    <img id="question-9-img-option-a" alt="">
                                </span>
                            </div>
                        </label>



                        <label for="nine-two" class="box nine-two">
                            <div class="course">
                                <span class="circle"></span>
                                <span class="subject">
                                    Option B
                                    <img id="question-9-img-option-b" alt="">
                                </span>
                            </div>
                        </label>



                        <label for="nine-three" class="box nine-three">
                            <div class="course">
                                <span class="circle"></span>
                                <span class="subject">
                                    Option C
                                    <img id="question-9-img-option-c" alt="">
                                </span>
                            </div>
                        </label>



                        <label for="nine-four" class="box nine-four">
                            <div class="course">
                                <span class="circle"></span>
                                <span class="subject">
                                    Option D
                                    <img id="question-9-img-option-d" alt="">
                                </span>
                            </div>
                        </label>


                    </div>
                </div>

            </form>
        </div>





        <!--question10-->
        <div class="row">
            <form class="question10">
                <div class="col-12">
                    <p class="fw-bold">
                    <div class="question-text" id ="question-10-text">
                        10. Question ten text
                    </div>
                    <p>
                        <img class="question-image" alt="" id="question-10-image">
                    </p>
                    </p>


                    <div>
                        <input type="radio" name="box" id="ten-one">
                        <input type="radio" name="box" id="ten-two">
                        <input type="radio" name="box" id="ten-three">
                        <input type="radio" name="box" id="ten-four">


                        <label for="ten-one" class="box ten-one ">
                            <div class="course">
                                <span class="circle"></span>
                                <span class="subject">
                                    Option A
                                    <img id="question-10-img-option-a" alt="">
                                </span>
                            </div>
                        </label>



                        <label for="ten-two" class="box ten-two">
                            <div class="course">
                                <span class="circle"></span>
                                <span class="subject">
                                    Option B
                                    <img id="question-10-img-option-b" alt="">
                                </span>
                            </div>
                        </label>



                        <label for="ten-three" class="box ten-three">
                            <div class="course">
                                <span class="circle"></span>
                                <span class="subject">
                                    Option C
                                    <img id="question-10-img-option-c" alt="">
                                </span>
                            </div>
                        </label>



                        <label for="ten-four" class="box ten-four">
                            <div class="course">
                                <span class="circle"></span>
                                <span class="subject">
                                    Option D
                                    <img id="question-10-img-option-d" alt="">
                                </span>
                            </div>
                        </label>


                    </div>
                </div>

            </form>
        </div>
        <?php 
            $total = 0;

            $q1 = $_POST["box-1 one-two"];
            $q2 = $_POST["box-1 two-four"];
            $q3 = $_POST["box-1 three-one"];
            if ($q1 == '0.072' ) {
                $total++;
            };
            if ($q2 == '144' ) {
                $total++;
            };
            if ($q3 == '64000' ) {
                $total++;
            };
            echo $total;
        ?>




        <div class="col-12">
            <div class="d-flex justify-content-center">
                <button class="submit-button" onclick="redirectToScorePage()">SUBMIT</button>
            </div>
        </div>
    </div>
    </div>

    <script src="navbar-timer.js"></script>
</body>

</html>