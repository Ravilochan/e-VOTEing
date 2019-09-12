
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> CR - IT-B 2/4 VOTE your CR </title>
	
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/tooplate.css">
</head>

<body id="survey" class="font-weight-light">
    <div class="container tm-container-max-800"><br><br>
		<a href="index.php" class="smoothScroll btn btn-default wow fadeInDown" data-wow-delay="2000"> LOG OUT </a>	
        <div class="row">
            <div class="col-12">
                <header class="mt-5 mb-5 text-center">
                    <h1 class="font-weight-light tm-form-title">Your CLASS REPRESENTATIVE ( CR )</h1>
                    <p class="tm-form-description" font="40px"> VOTE for one among your classmates ,to be a student eho represents your class ideas and emotions on all matters (academic and other stuff) to lecturers, Faculty and Department. </p>
                </header>
                <form action="" method="post">
                    <div class="tm-bg-black tm-form-block">
                        <p class="mb-4"> You can vote to only <bold>ONE</bold> among all Nominants </p>
                        <ul class="ml-3">
                            <li>
                                <label>
                                    <input class="with-gap" name="group1" value="value1" type="radio" />
                                    <span> ARJUN REDDY</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input class="with-gap" name="group1" value="value2" type="radio" />
                                    <span> VIRAT KOHLI</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input class="with-gap" name="group1" value="value3" type="radio" />
                                    <span> KRISHNA </span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input class="with-gap" name="group1" value="value4" type="radio" />
                                    <span> PRIYA</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="tm-bg-black tm-form-block">
                        <p class="mb-4"> Any special mentions ( or ) comments , Your reponsce is very valuable please do respond honestly and helpfully .</p>
                        <div class="row">
                            <div class="col-xl-6 mb-4">
                                <textarea class="p-2" name="description" cols="10" rows="2" placeholder="                                                                             Your description       "></textarea>
                            </div><br>
                            <div class="col-xl-6">
                                <ul>
                                    <li>
                                        <label>
                                            <input type="checkbox" name="choice1" class="filled-in" checked="checked" />
                                            <span>Choice One</span> <input type="text" placeholder="Enter NAME " class="validate">
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" name="choice2" class="filled-in" checked="checked" />
                                            <span>Second Choice</span> <input type="text" placeholder="Enter NAME " class="validate">
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" name="choice3" class="filled-in" />
                                            <span>Third Choice</span> <input type="text" placeholder="Enter NAME " class="validate">
                                        </label>
                                    </li>
                                </ul>

                            </div>
                        </div>

                    </div>

                   <br><br>
                    <div class="text-center mt-5">
                        <button type="submit" class="waves-effect btn-large" onclick="alert">Submit</button><br><br><a href="index.php" class="smoothScroll btn btn-default wow fadeInDown" data-wow-delay="2000"> RESULTS </a>	
                    </div>
                </form>
            </div>
        </div>
        <footer class="row tm-mt-big mb-3">
            <div class="col-xl-12">
                <p class="text-center grey-text text-lighten-2 tm-footer-text-small">
                    Copyright &copy; 2018 e-VOTEing
					</p>
            </div>
        </footer>
    </div>

    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script>
        $(document).ready(function () {
            $('select').formSelect();
        });
    </script>
</body>

</html>