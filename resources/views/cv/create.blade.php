@extends('home')
@section('content')
<style type="text/css">
	.circle-chart {
		width: 100px;
		height: 100px;
		margin-bottom: 5px;
		margin: 30px auto;
		position: relative;
		display: block;
	}

	.ui-datepicker-month {
		margin-left: -40px;
	}

	.header-left-text {
		position: relative;
	}

	.name-one {
		padding: 0;
	}

	.name-one:before {
		content: "";
		width: 41%;
		border-top: 2px solid #F64C71;
		position: absolute;
		display: block;
	}

	.infor-table table tr td:first-child {
		padding-right: 0 !important;
		font-weight: bold;
		width: 30%;
	}

	.title-cv {
		color: red !important;
	}

	.owl-dots .owl-dot span {
		display: none !important;
	}

	.input-title {
		background: none;
		border: none;
		color: #ffffff;
		width: 64%;
	}

	.input-year {
		background: none;
		border: none;
		color: #ffffff;
		width: 8.5%;
		text-align: center;
	}

	.team-chart-div .team-chart-span {
		position: absolute;
	}

	.span-white-per-number {
		background: none !important;
		z-index: 9;
		border: none;
		color: #ffffff;
		position: absolute;
		top: 0;
		left: 0;
		text-align: center;
		display: block;
		width: 100%;
		height: 100px;
	}

</style>
<form id="cv-validate" method="POST" action="{{ route('home.store') }}" enctype="multipart/form-data" class="cv-body mx-auto">
	@csrf
	<div class="container-fluid">
		<div class="title text-center d-block">
			<input class="input-yi title-cv" type="text" name="title_cv" value="title no cv">
		</div>
		<div class="btn-save text-right">
			<button type="submit" class="btn btn-success" class="btn-save-cvs">Save CV</button>
		</div>
	</div>

	<div class="header-top container-fluid">
		<div class="container">
			<div class="header-bg position-relative row">
				<img id="" src="" alt="">
				<ul class="d-md-none menu-mobile">
					<li><a href="#">English</a></li>
					<li><a href="#">Japanese</a></li>
				</ul>
				<div class="header-left position-relative overflow-hidden col-12 col-sm-12 col-md-6 d-flex align-items-center justify-content-center justify-content-md-start align-items-md-end pb-0 pb-md-5">
					<div class="header-left-text">
						<input type="text" id="nameOne" class="input-bg mb-0 pl-0" name="name" value="BUMBLEBEE WALKER" placeholder="Enter name...">
						<p class="name-one"></p>
						<input type="text" class="input-span mb-0 pl-0" name="developer" value="Ruby on Rail Developer">
					</div>
					<label class="icon-camera">
						<input type="file" onchange="readURLBg(this);" name="file" class="d-none" />
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
							<img id="blah" class="mx-auto" src="public/images/Rectangle.png" alt="">
							<label class="mx-auto icon-avatar position-absolute" class="avatar-camera-right" title="avarta">
								<input class="d-none" onchange="readURL(this);" type="file" name="avatar-mini" value="">
								<i class="camera-i fas fa-camera pt-2"></i>
							</label>
						</div>
					</div>
					<div class="title">
						<input id="nameTwo" type="text" class="input-yi bumble p-0 m-0 font-weight-bold" name="name" value="BUMBLEBEE WALKER">
						<input class="datepicker-11 input-yi date-time p-0" type="text" name="date" value="" placeholder="yy - mm - dd">
						<p class="line"></p>
					</div>
					<div class="infor-table">
						<table>
							<tbody>
								<tr>
									<td>Phone:</td>
									<td><input class="input-yi-table" type="text" name="phone" value="0869113246"></td>
								</tr>
								<tr>
									<td>Email:</td>
									<td><input class="input-yi-table" type="email" name="email" value="anhtruongtk11@gmail.com"></td>
								</tr>
								<tr>
									<td>Facebook:</td>
									<td><input class="input-yi-table" type="text" name="facebook" value="bumblebee"></td>
								</tr>
								<tr>
									<td>Skype:</td>
									<td><input class="input-yi-table" type="text" name="skype" value="bumblebee"></td>
								</tr>
								<tr>
									<td>Chatwork:</td>
									<td><input class="input-yi-table" type="text" name="chartwork" value="bumblebee"></td>
								</tr>
								<tr>
									<td>Address:</td>
									<td><input class="input-yi-table" type="text" name="address" value="Mai Dich - Cau Giay - Ha Noi"></td>
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
					<textarea class="input-yi-table text-justin" rows="4" cols="100" name="sumary" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</textarea>
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
					<textarea class="input-yi-table text-justin" rows="4" cols="100" width="10%" name="professional_skill_des" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod </textarea>
					<div class="skill-item col-6 col-sm-4 col-md-6 col-lg-4">

					</div>
					<div class="row chart-icon">
						<div class="col-6 col-sm-4 col-md-6 col-lg-4 btn-chart" style="">
							<button class="btn-add-chart" type="button">Add Skills <i class="fas fa-plus"></i></button>
						</div>
					</div>
				</div>
				<div class="skills-right col-12 col-sm-12 col-md-6">
					<h1 class="skill-migi pt-5 pt-md-0 pt-lg-0">PERSONAL SKILLS</h1>
					<textarea class="input-yi-table text-justin" rows="4" cols="100" width="10%" name="personal_skill_des" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod </textarea>
					
					<div class="team-chart ml-0 mr-md-4 ml-md-4 row">
						<div class="btn-sumary col-md-12 text-right mt-4 pr-0">
							<button class="btn-edit-sumary" type="button">Add Skills 
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
				<textarea class="input-yi-table text-justin" rows="4" cols="100" width="10%" name="work_experience_des" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod </textarea>
				<div class="box">
					
				</div>
				<div class="btn-experince text-md-right text-center">
					<button class="btn-add-experince" type="button">
						Add work experience <i class="fas fa-plus"></i>
					</button>
				</div>
			</div>
			<div class="col-md-6 educati">
				<h1 class="white-line">WORK EDUCATION</h1>
				<textarea class="input-yi-table text-justin" rows="4" cols="100" width="10%" name="education_des" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod </textarea>
				<div class="box-edu">
				</div>
				<div class="btn-experince-two text-md-right text-center">
					<button class="btn-add-experince-right mt-0" type="button">
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
					<button class="btn-add-project" class="cv-btn align-middle" type="button">Add Project
						<i class="fas fa-plus"></i>
					</button>
				</div>
			</div>
		</div>   
		<!-- Modal HTML Markup -->
		<div style="color: black" id="ModalLoginForm" class="modal fade">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h2 class="modal-title">infor portfolio</h2>
					</div>
					<div class="modal-body">
						<form role="form" method="POST" action="">
							@csrf
							<div class="form-group">
								<label class="control-label">Name: </label>
								<div>
									<input type="text" class="form-control input-lg name" placeholder="Enter name..." name="name" value="">
								</div>
							</div>

							<div class="form-group">
								<label class="control-label">Date start: </label>
								<div>
									<input type="text" class="datepicker datepicker-11 dateStart" name="date_start" placeholder="Year/ Month/ Day"><br>
								</div>
								<br>

								<div class="form-group">
									<label class="control-label">Date end: </label>
									<div>
										<input type="text" class="datepicker-12 datepicker dateEnd" id="datepicker-12" name="date_end" placeholder="Year/ Month/ Day"><br>
									</div>
								</div>
								<div class="form-group text-center">
									<div>
										<button type="button" class="btn btn-success btnSaveProject" id="btn-save-infor">
											Save
										</button>
									</div>
								</div>
							</form>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
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
			<button class="btn-add-references" type="button">Add References
				<i class="fas fa-plus"></i>
			</button>
		</div>
	</div>
</div>
<div class="container-fluid footer">
	<p>2019 Flatos.com All right reserved</p>
</div>
</form>
@endsection
