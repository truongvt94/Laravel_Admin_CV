@extends('home')
@section('content')
<div class="container-fluid">
	<div class="title text-center d-block">
		<h5 style="color: red; font-size: 25px" contenteditable="true">Title</h5>
	</div>
	<div class="btn-save text-right">
		<a class="btn btn-success" href="{{ route('home.index') }}">Save CV</a>
	</div>
</div>
<div class="header-top container-fluid">

	<div class="container">
		<div class="header-bg position-relative row">
			<ul class="d-md-none menu-mobile">
				<li><a href="#">English</a></li>
				<li><a href="#">Japanese</a></li>
			</ul>
			<div class="header-left position-relative overflow-hidden col-12 col-sm-12 col-md-6 d-flex align-items-center justify-content-center justify-content-md-start align-items-md-end pb-0 pb-md-5">
				<div class="header-left-text">
					<h2 id="name-one" class="mb-0 pl-0" contenteditable="true" name="name">BUMBLEBEE WALKER</h2>
					<span contenteditable="true" name="developer">Ruby on Rail Developer</span>
				</div>
				<label class="icon-camera">
					<input type="file" name="file" class="d-none" />
					<i class="camera-i fas fa-camera"></i>
				</label>
			</div>
			<div class="header-right col-12 col-sm-12 col-md-5 offset-md-1">
				<div class="menu">
					<ul class="d-none d-md-block">
						<li><a href="#">English</a></li>
						<li><a href="#">Japanese</a></li>
					</ul>

					<div class="avatar-mini">
						<img class="mx-auto" src="images/Rectangle.png" alt="">
						<a class="mx-auto icon-avatar position-absolute" class="avatar-camera-right" href="#" title="avarta">
							<i class="camera-i fas fa-camera"></i>
						</a>
					</div>
				</div>
				<div class="title">
					<p id="name-two" class="name-two bumble p-0 m-0 font-weight-bold" contenteditable="true" name="name">BUMBLEBEE WALKER</p>
					<p class="date-time p-0" contenteditable="true" name="date">25/12/1992</p>
					<p class="line"></p>
				</div>
				<div class="infor-table">
					<table>
						<tbody>
							<tr>
								<td>Phone:</td>
								<td contenteditable="true" name="phone">phone</td>
							</tr>
							<tr>
								<td>Email:</td>
								<td contenteditable="true" name="email">Email</td>
							</tr>
							<tr>
								<td>Facebook:</td>
								<td contenteditable="true" name="facebook">bumblebee</td>
							</tr>
							<tr>
								<td>Skype:</td>
								<td contenteditable="true" name="skype">bumblebee</td>
							</tr>
							<tr>
								<td>Chatwork:</td>
								<td contenteditable="true" name="chartwork">bumblebee</td>
							</tr>
							<tr>
								<td>Address:</td>
								<td contenteditable="true" name="address">58 Tran Binh - Mai Dich - Cau Giay - Ha Noi</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="btn-profile text-center">
					<button class="btn-edit-profile" type="submit"><a href="#">Edit Profile <i class="fas fa-pen"></i></a>
					</button>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid profestinal-sumary">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="sumary">PROFESSIONAL SUMMARY</h1>
				<p contenteditable="true" name="sumary">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				<div class="btn-sumary text-right">
					<button class="btn-edi-sumary" type="submit">Edit Summary 
						<i class="fas fa-pen"></i>
					</button>
				</div>  
				<div class="clear">
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid professional-skills">
	<div class="container">
		<div class="row">
			<div class="skills-left col-12 col-sm-12 col-md-6">
				<h1 class="skill-hidari">PROFESSIONAL SKILLS</h1>
				<p contenteditable="true">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip
				</p>

				<div class="row chart-icon">
					<div class="col-6 col-sm-4 col-md-6 col-lg-4 btn-chart" style="">
						<button class="btn-add-chart">Add Skills <i class="fas fa-plus"></i></button>
					</div>
				</div>

			</div>
			<div class="skills-right col-12 col-sm-12 col-md-6">
				<h1 class="skill-migi pt-5 pt-md-0 pt-lg-0">PERSONAL SKILLS</h1>
				<p contenteditable="true">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip
				</p>
				
				<div class="team-chart ml-0 mr-md-4 ml-md-4 row">
					<div class="btn-sumary col-md-12 text-right mt-4 pr-0">
						<button class="btn-edit-sumary" type="submit">Add Skills 
							<i class="fas fa-plus"></i>
						</button>
					</div> 
				</div>

				<div class="clearfix">
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<div class="container-fluid work-experience">
	<div class="container work-experience-margin">
		<div class="left row">
			<div class="col-md-6 full-item">
				<h1 class="white-line">WORK EXPERIENCE</h1>
				<p contenteditable="true">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt</p>
				<div class="box">
				</div>
				<div class="btn-experince text-md-right text-center">
					<button class="btn-add-experince" type="submit">
						Add work experience <i class="fas fa-plus"></i>
					</button>
				</div>
			</div>
			<div class="col-md-6 educati">
				<h1 class="white-line">WORK EDUCATION</h1>
				<p contenteditable="true">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt</p>
				<div class="box-edu">
				</div>
				<div class="btn-experince-two text-md-right text-center">
					<button class="btn-add-experince-right mt-0" type="submit">
						Add Education <i class="fas fa-plus"></i>
					</button>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid portfolio">
	<div class="container">
		<h1 class="portfolio-folder">PORTFOLIO</h1>
		<div class="menu-portfolio mt-4 col-md-12">
			<ul>
				<li><a href="#">ALL</a></li>
				<li><a href="#">FARTURED</a></li>
				<li><a href="#">2018</a></li>
				<li><a href="#">2019</a></li>
				<li><a href="#">>></a></li>
			</ul>
		</div>

		<div class="d-none d-flex w-100 flex-wrap portfolio-pc">
			<div class="w-25 project-one position-relative">

			</div>
			<div class="w-25 project-two">

			</div>

			<div class="w-25 project-three">

			</div>

			<div class="w-25">
				<div class="project-for">

				</div>
				<div class="btn-project project-ni w-100 cv-center">
					<button class="btn-add-project" class="cv-btn align-middle">Add Project
						<i class="fas fa-plus"></i>
					</button>
				</div>
			</div>
		</div>   

		<div class="d-lg-none d-md-none d-md-block d-flex w-100 flex-wrap portfolio-mb">
			<div class="w-50" id="proLeft">
				<div style="height:109px;background-color:#FD7038" class="cv-center">
					<img src="images/project.jpg" style="width: 88px;">
				</div>
				<div style="height:109px;background-color:#2F2FA1" class="cv-center">
					<img src="images/project.jpg" style="width: 88px;">
				</div>
				<div style="height:109px;background-color:#F64C71" class="cv-center">
					<img src="images/project.jpg" style="width: 88px;">
				</div>
				<div style="height:218px;background-color:#EF5B5B" class="cv-center">
					<img src="images/project-black.jpg" style="width: 119px;">
				</div>
				<div style="height:109px;background-color:#333333" class="cv-center">
					<img src="images/project.jpg" style="width: 88px;">
				</div>
			</div>

			<div class="w-50">
				<div id="proRight">
					<div style="height:218px;background-color:#EECD10" class="cv-center">
						<img src="images/project-black.jpg" style="width: 119px;">
					</div>
					<div style="height:109px;background-color:#333333" class="cv-center">
						<img src="images/project.jpg" style="width: 88px;">
					</div><div style="height:109px;background-color:#F9BC2D" class="cv-center">
					<img src="images/project.jpg" style="width: 88px;">
				</div>
				<div style="height:109px;background-color:#F64C71" class="cv-center">
					<img src="images/project.jpg" style="width: 88px;">
				</div>
			</div>
			<div class="btn-project project-ni w-100 cv-center">
				<button class="btn-add-project" class="cv-btn align-middle">Add Project
					<i class="fas fa-plus"></i>
				</button>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
<!-- -->
<div class="container-fluid references">
	<div class="container">
		<h1 class="refer mb-5">REFERENCES RENCES</h1>
		<div id="truong" class="owl-carousel owl-theme">
			
		</div>
		<div class="btn-refer"> 
			<button id="btn-delete-refer">
				<i onclick='myrefer(this)' class="far fa-trash-alt d-flex justify-content-end">
				</i>
			</button>
		</div>
		<div class="col-md-12 btn-references text-center" style="">
			<button class="btn-add-references">Add References
				<i class="fas fa-plus"></i>
			</button>
		</div>
	</div>
</div>
<div class="container-fluid footer">
	<p>2019 Flatos.com All right reserved</p>
</div>
@endsection