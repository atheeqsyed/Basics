<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
          integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link id='favicon' rel="shortcut icon" href="/assets/images/favicon.png" type="image/x-png">

    <title>Experience | Portfolio Atheeq</title>
</head>
<body oncontextmenu="return false">

<header>
    <a href="#home" class="logo"><i class="fab fa-magento"></i> Atheeq</a>

    <div id="menu" class="fas fa-bars"></div>
    <nav class="navbar">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#education">Education</a></li>
            <li><a href="#work">Work</a></li>
            <li><a href="#experience">Experience</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
</header>
<section class="home" id="home">

    <div align="center" class="content">
        <h2>I'm Atheeq <span>Rasheed</span></h2>
        <p>i am into <span class="typing-text"></span></p>
        <a href="#about" class="btn"><span>About Me</span>
            <i class="fas fa-arrow-circle-down"></i>
        </a>
        <div class="socials">
            <ul class="social-icons">
                <li><a class="linkedin" aria-label="LinkedIn" href="" target="_blank"><i
                        class="fab fa-linkedin"></i></a></li>
                <li><a class="github" aria-label="GitHub" href="" target="_blank"><i class="fab fa-github"></i></a></li>
                <li><a class="skype" aria-label="Skype" href="" target="_blank"><i class="fab fa-skype"></i></a></li>
                <li><a class="dev" aria-label="Dev" href="" target="_blank"><i class="fab fa-dev"></i></a></li>
                <li><a href="" class="fas fa-envelope" aria-label="Mail" target="_blank"></a></li>
            </ul>
        </div>
    </div>

</section>


<section class="about" id="about">

    <h2 style="margin-top: 60px;" class="heading"><i class="fas fa-user-alt"></i> About <span>Me</span></h2>

    <div class="row">

        <div class="image">
            <img draggable="false" class="tilt" src="./assets/images/Atheeq.jpg" alt="">
        </div>
        <div class="content">
            <h3>I'm Atheeq</h3>
            <span class="tag">PHP and Magento Developer</span>

            <p>I am a Full-Stack developer based in Karnataka, India.
                I am an Computer Science Engineering graduate from VTU.
                I am very passionate about improving my coding skills & developing applications & websites.
                I build WebApps and Websites.
                Working for myself to improve my skills.
                Love to build Full-Stack clones. </p>

            <div class="box-container">
                <div class="box">
                    <p><span> age: </span> 31</p>
                    <p><span> phone : </span> +91 886-141-0345</p>
                </div>
                <div class="box">
                    <p><span> email : </span> atheeqmvj@gmail.com</p>
                    <p><span> place : </span> Karnataka, India - 577522</p>
                </div>
            </div>

            <div class="resumebtn">
                <a href="./AtheeqR.pdf" target="_blank" class="btn"><span>Resume</span>
                    <i class="fas fa-chevron-right"></i>
                </a>
            </div>

        </div>
    </div>
</section>

<section class="skills" id="skills">

    <h2 style="margin-top: 60px" class="heading"><i class="fas fa-laptop-code"></i> Skills & <span>Abilities</span></h2>

    <div class="container">
        <div class="row" id="skillsContainer">

        </div>
    </div>
</section>

<section class="education" id="education">

    <h1 style="margin-top: 60px" class="heading"><i class="fas fa-graduation-cap"></i> My <span>Education</span></h1>

    <div class="box-container">

        <div class="box">
            <div class="content">
                <h3>Bachelor of Engineering in Computer Science</h3>
                <p>MVJ College of engineering</p>
                <h4>2010-2014</h4>
            </div>
        </div>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <div class="box">
            <div class="content">
                <h3>Diploma in Computer Science and Engineering</h3>
                <p>SJM Polythenic</p>
                <h4>2007-2010</h4>
            </div>
        </div>

    </div>


</section>
<section class="work" id="work">
    <h2 style="margin-top: 60px" class="heading"><i class="fas fa-laptop-code"></i> Projects <span>Made</span></h2>

    <div class="box-container">
    </div>
    <table>
        <thead>
        <tr>
            <th>Project Name</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
        <?php  getProjects();
        foreach ($json_data as $i => $item)
        {
            echo "<tr>";
            echo "<td><h3>$item[name]</h3></td>";
            echo "<td> $item[desc]</td>";
            echo "</tr>";
        }
        ?>
        </tbody>

    </table>

    <?php
    function getProjects()
   {
       $json = file_get_contents('projects.json');
       $json_data = json_decode($json, true);

       /*echo "<table>";
       echo "<tr>";
       echo "<th>Project Name </th>";
       echo "<th>Descritpion </th>";
       echo "</tr>";
       foreach ($json_data as $i => $item)
       {
           echo "<tr>";
           echo "<td><h3>$item[name]</h3></td>";
           echo "<td> $item[desc]</td>";
           echo "</tr>";
       }
       echo "</table>";*/
   }

       /* print_r($json_data);*/

       /*foreach($json_data as $item) {
           echo $item['name'];
           echo $item['desc'];

           // To know what's in $item
           echo '<pre>'; var_dump($item);
       }*/


   /* fetchData("projects").then(data => {
    showProjects(data);
    }*/
/*    function showProjects (DOMDocument $document, $projects)
    {
        $projectContainer = $document->querySelector(".work .box-container");
        $projectsHTML = "";
        foreach ($projects as $project) {
            $projectsHTML .= '<div class="box tilt" style="width: 380px; margin: 1rem">
      <div class="content">
        <div class="tag">
        <h3>${project.name}</h3>
        </div>
        <div class="desc">
          <p>${project.desc}</p>
        </div>
      </div>
    </div>
    </div>';
        }
        $document->getElementById('$projectContainer') -> $projectsHTML;
        // isotope filter products
        $grid = ('.box-container') . isotope;
        {itemSelector:  '.grid-item';
            layoutMode: 'fitRows';
        }
    }
    getProjects().then(json_data->showProjects($json_data);*/


  /*  include 'db.php';*/
  /*  include 'condb.php';

    $db = new database();
    $query = "select * from Projects";
    $result = $db->select($query);

    echo "<table>";
    echo "<tr>";
    echo "<th>Project Name </th>";
    echo "<th>Project Desc </th>";
    echo "</tr>";
    while($row = mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo "<td> $row[project_name]</td>";
        echo "<td> $row[project_desc]</td>";
        echo "</tr>";
    }
    echo "</table>";*/
    ?>

</section>

<section class="experience" id="experience">

    <h2 style="margin-top: 60px" class="heading"><i class="fas fa-briefcase"></i> Experience </h2>

    <div class="timeline">

        <div class="container right">
            <div class="content">
                <div class="tag">
                    <h2>ATT Systems Group - Singapore</h2>
                </div>
                <div class="desc">
                    <h3>Senior Software Engineer</h3>
                    <p>Aug 2021 - present</p>
                </div>
            </div>
        </div>

        <div class="container left">
            <div class="content">
                <div class="tag">
                    <h2>ATT Systems Group - Singapore</h2>
                </div>
                <div class="desc">
                    <h3>Business Intelligence Analyst</h3>
                    <p>Jan 2021 - July 2021</p>
                </div>
            </div>
        </div>

        <div class="container right">
            <div class="content">
                <div class="tag">
                    <h2>ATT Systems(India) Pte Ltd - India</h2>
                </div>
                <div class="desc">
                    <h3>Senior Software Engineer</h3>
                    <p>Dec 2019 - Dec 2020</p>
                </div>
            </div>
        </div>

        <div class="container left">
            <div class="content">
                <div class="tag">
                    <h2>ATT Systems Group - Australia</h2>
                </div>
                <div class="desc">
                    <h3>Software Engineer</h3>
                    <p>July 2018 - Nov 2019</p>
                </div>
            </div>
        </div>

        <div class="container right">
            <div class="content">
                <div class="tag">
                    <h2>ATT Systems(India) Pte Ltd - India</h2>
                </div>
                <div class="desc">
                    <h3>Software Engineer</h3>
                    <p>June 2015 - JUne 2018</p>
                </div>
            </div>
        </div>

        <div class="container left">
            <div class="content">
                <div class="tag">
                    <h2>ATT Systems (India) Pte Ltd - India</h2>
                </div>
                <div class="desc">
                    <h3>Trainee Software Engineer</h3>
                    <p>Feb 2015 - May 2015</p>
                </div>
            </div>
        </div>
    </div>

    </div>

</section>

<section class="contact" id="contact">

    <h2 class="heading"><i class="fas fa-headset"></i> Get in <span>Touch</span></h2>

    <div style="margin-left: 230px" class="container">
        <div class="content">
            <div class="image-box">
                <img draggable="false" src="./assets/images/contact.png" alt="">
            </div>
            <form id="contact-form">

                <div class="form-group">
                    <div class="field">
                        <input type="text" name="name" placeholder="Name" required>
                        <i class='fas fa-user'></i>
                    </div>
                    <div class="field">
                        <input type="text" name="email" placeholder="Email" required>
                        <i class='fas fa-envelope'></i>
                    </div>
                    <div class="field">
                        <input type="text" name="phone" placeholder="Phone">
                        <i class='fas fa-phone-alt'></i>
                    </div>
                    <div class="message">
                        <textarea placeholder="Message" name="message" required></textarea>
                        <i class="fas fa-comment-dots"></i>
                    </div>
                </div>
                <div class="button-area">
                    <button type="submit">
                        Submit <i class="fa fa-paper-plane"></i></button>
                </div>
            </form>
        </div>
    </div>
</section>

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Atheeq's Portfolio</h3>
            <p>Thank you for visiting my personal portfolio website. Connect with me over socials. <br/> <br/> Keep
                Rising 🚀. Connect with me over live chat!</p>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#home"><i class="fas fa-chevron-circle-right"></i> home</a>
            <a href="#about"><i class="fas fa-chevron-circle-right"></i> about</a>
            <a href="#skills"><i class="fas fa-chevron-circle-right"></i> skills</a>
            <a href="#education"><i class="fas fa-chevron-circle-right"></i> education</a>
            <a href="#work"><i class="fas fa-chevron-circle-right"></i> work</a>
            <a href="#experience"><i class="fas fa-chevron-circle-right"></i> experience</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <p><i class="fas fa-phone"></i>+91 886-141-0345</p>
            <p><i class="fas fa-envelope"></i>atheeqmvj@gmail.com</p>
            <p><i class="fas fa-map-marked-alt"></i>Karnataka, India-577522</p>
            <div class="share">

                <a href="" class="fab fa-linkedin" aria-label="LinkedIn" target="_blank"></a>
                <a href="" class="fab fa-github" aria-label="GitHub" target="_blank"></a>
                <a href="" class="fas fa-envelope" aria-label="Mail" target="_blank"></a>
                <a href="" class="fab fa-skype" aria-label="Skype" target="_blank"></a>
            </div>
        </div>
    </div>

    <h1 class="credit">Designed with <i class="fa fa-heart pulse"></i> by <a href=""> Atheeq</a></h1>

</section>
<a href="#work" class="fas fa-angle-up" id="scroll-top1"></a>
<a href="#home" aria-label="ScrollTop" class="fas fa-angle-up" id="scroll-top"></a>
<a href="#experience" class="fas fa-angle-up" id="scroll-top2"></a>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.5/typed.min.js"
        integrity="sha512-1KbKusm/hAtkX5FScVR5G36wodIMnVd/aP04af06iyQTkD17szAMGNmxfNH+tEuFp3Og/P5G32L1qEC47CZbUQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js"
        integrity="sha512-SttpKhJqONuBVxbRcuH0wezjuX+BoFoli0yPsnrAADcHsQMW8rkR84ItFHGIkPvhnlRnE2FaifDOUw+EltbuHg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script
        type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js"
></script>
<script src="https://unpkg.com/scrollreveal"></script>
<script src="./assets/js/script.js"></script>
</body>

</html>
