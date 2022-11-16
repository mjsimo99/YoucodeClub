<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <style>
        nav.navbar.navbar-expand-lg.bg-dark.bg-gradient {
        position: relative!important;
        --bs-bg-opacity: 100%!important;
        
        
        }       
        .form-label{
            text-align: center;
            width:100%
        }
        .p-5{
            margin-bottom: 2%;
            background-color: aliceblue;
        }
        .form_login {
            width: 100%!important;
        }
        .d-grid{
            width: 50%;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
        <link rel="stylesheet" href="style/style.css?v=<?php echo time(); ?>">



</head>
<body>
<!-- navbar -->
<?php include 'pages/navbar.php'; ?>
<!-- member -->
<div class="bannerhome">
		<div class="bannerImg">
			<img src="images/clubs/member.png" width="100%" />
		</div>
		<div class="bannerText">
		
			<h2  class="titles_text">La création d'un Club est trés simple</h2>	<br>
			<h3 class="titles_text2" style="font-weight: 300;">Organiser vos Clubs, Commencer un Club et ajouter les membres.</h3>		
			<br><br><br>
            <div class="d-grid">
                        <button class="btn btn-primary" type="submit" >Add Member</button>
                    </div>		
		</div>
	</div>
<!-- member -->
<!-- ajout member -->
<div id="club" class="ajout_club">
    <div class="ajout_title"><h3>Add Member </h3></div>
            <div class="col-md-4 p-5 shadow-sm border ">
                <form class="form_login">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">First Name:</label>
                        <input type="email" class="form-control border border-primary" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="FirstName">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Last Name:</label>
                        <input type="email" class="form-control border border-primary" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="LastName">
                    </div>
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Member Class:</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open to choise class</option>
                        <option value="1">Ada Lovelace</option>
                        <option value="2">Alan Turing</option>
                        <option value="3">Margaret Hamilton</option>
                    </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Member Age:</label>
                        <input type="email" class="form-control border border-primary" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Member Age">
                    </div>
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Role Member:</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open to choise role</option>
                        <option value="5">President</option>
                        <option value="6">Member</option>
                    </select>
                    </div>
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Club:</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open to choise club</option>
                        <option value="7">...</option>
                        <option value="8">...</option>
                    </select>
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary" type="submit">Add Member</button>
                    </div>
                </form>
            </div>
</div><!-- AjoutMemberEnd -->

<!-- club end -->
<!-- link for pages -->
<a href="club.php" class="link-primary">club</a>
<a href="index.php" class="link-secondary">index</a>
<a href="club.php" class="link-success">club</a>
<a href="member.php" class="link-danger">member</a>
<a href="recherch.php" class="link-warning">recherch</a>
  <!-- footer -->
  <footer>
    
  <div class="footer_text"><p><span class="yc-title-1">You</span><span class="yc-title-2">Code</span> © 2020</p></div>
  <div class="footer_icone">
        <svg width="30" height="30" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M7 10v4h3v7h4v-7h3l1-4h-4V8a1 1 0 0 1 1-1h3V3h-3a5 5 0 0 0-5 5v2H7Z"></path>
        </svg>
        <svg width="30" height="30" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M16 4H8a4 4 0 0 0-4 4v8a4 4 0 0 0 4 4h8a4 4 0 0 0 4-4V8a4 4 0 0 0-4-4Z"></path>
            <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"></path>
            <path d="M16.5 7.5v.001"></path>
        </svg>
        <svg width="30" height="30" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M18 4H6a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2Z"></path>
            <path d="M8 11v5"></path>
            <path d="M8 8v.01"></path>
            <path d="M12 16v-5"></path>
            <path d="M16 16v-3a2 2 0 0 0-4 0"></path>
        </svg>
        <svg width="30" height="30" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="m8 20 4-9"></path>
            <path
                d="M10.7 13.998c.437 1.263 1.43 2 2.55 2 2.071 0 3.75-1.554 3.75-4a4.999 4.999 0 0 0-7.864-4.104A5 5 0 0 0 7.3 13.698">
            </path>
            <path d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Z"></path>
        </svg>
        </div>
    </footer>
    <!-- footer end -->

</body>
</html>

































