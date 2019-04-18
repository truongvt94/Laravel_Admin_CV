    let skpc = ['60'];
    let skn = ['Skill name'];
    $(".btn-edit-sumary").click(function() {
        let skillAdd = `<div class="skill-items">
                        <div id="team-delete" class="team-chart mt-4 mr-md-4 ml-md-4 row"><input type="text" class="input-yi skill-name text-left" name="skill_name" value="Skill_Name"><br>
                            <div class="col-md-12 team-chart-div mt-4">
                                <div class="col-md-12 p-0 d-flex justify-content-end team-chart-one" style="width: ${skpc}% !important">
                                <input type="text" class="text-right input-yi skill-pc team-chart-span mt-3" name="" value="${skpc}%">
                                </div>
                                </div>
                                <button class="btn-delete" type="button">
                                    <i onclick="myfunction(this)" class="far fa-trash-alt d-flex justify-content-end"></i>
                                </button>
                            </div>
                        </div>`;
        $(".btn-edit-sumary").parents('.team-chart').before(skillAdd);
    });

    $(document).on('change', '.skill-pc', function() {
        let skpc = parseInt($(this).val());
        if(parseInt($(this).val()) > 100 || parseInt($(this).val()) < 10) {
            alert('Bạn không được nhập lớn hơn 100% và nhỏ hơn 10%');

            let skillAdd = `<div class="skill-items">
                        <div id="team-delete" class="team-chart mt-4 mr-md-4 ml-md-4 row"><input type="text" class="input-yi skill-name text-left" name="skill_name" value="Skill Name"><br>
                            <div class="col-md-12 team-chart-div mt-4">
                                <div class="col-md-12 p-0 d-flex justify-content-end team-chart-one" style="width: 50% !important">
                                <input type="text" class="text-right input-yi skill-pc team-chart-span mt-3" name="" value="50%">
                                </div>
                                </div>
                                <button class="btn-delete" type="button">
                                    <i onclick="myfunction(this)" class="far fa-trash-alt d-flex justify-content-end"></i>
                                </button>
                            </div>
                        </div>`;
        $(this).closest('.skill-items').html(skillAdd);
        }

        let skillAdd = `<div class="skill-items">
                        <div id="team-delete" class="team-chart mt-4 mr-md-4 ml-md-4 row"><input type="text" class="input-yi skill-name text-left" name="skill_name" value="Skill_Name"><br>
                            <div class="col-md-12 team-chart-div mt-4">
                                <div class="col-md-12 p-0 d-flex justify-content-end team-chart-one" style="width: ${skpc}% !important">
                                <input type="text" class="text-right input-yi skill-pc team-chart-span mt-3" name="" value="${skpc}%">
                                </div>
                                </div>
                                <button class="btn-delete" type="button">
                                    <i onclick="myfunction(this)" class="far fa-trash-alt d-flex justify-content-end"></i>
                                </button>
                            </div>
                        </div>`;
        $(this).closest('.skill-items').html(skillAdd);
    });

    let j = 0;
    
    function myfunction(x){
        $(x).closest('#team-delete').addClass('removeSkill').remove();
    }

    function myproject(x){
        j--;
        $(x).closest('#project').remove();
    }

    function myexperince(x){
        $(x).closest('.item-one').addClass('removeExperince').remove();
    }

    function myskillleft(x){
        $(x).closest('.chart-mazu').addClass('removeSkillLeft').remove();
    }

    $("#btn-delete-refer").click(function() {
        var indexToRemove = 2;
        $(".owl-carousel").trigger('remove.owl.carousel', [indexToRemove]).trigger('refresh.owl.carousel');
    });

    //add project
    function loadProject() {
        let height = ["200px","400px","200px","200px","200px","400px","200px","200px","200px","200px"];
        let bg = ["#FD7038","#EECD10","#2F2FA1","#F64C71","#333333","#EF5B5B","#F9BC2D","#F64C71","#333333","#9D4F81"];

        $(".btn-add-project").click(function() {
            j++;
            if(j == height.length) {
                height.push("200px","400px","200px","200px","200px","400px","200px","200px","200px","200px");
                bg.push("#FD7038","#EECD10","#2F2FA1","#F64C71","#333333","#EF5B5B","#F9BC2D","#F64C71","#333333","#9D4F81");
            }
            $(".project-one").empty();
            $(".project-two").empty();
            $(".project-three").empty();
            $(".project-for").empty();

            for (i = 0; i < j; i++) {
                let div_img = "<div id='project' style='height:"+height[i]+"; background-color:"+bg[i]+"' class=\"position-relative cv-center project-ni project-img-one\"><div data-toggle=\"modal\" data-target=\"#ModalLoginForm\" class=\"img-project\"><img src=\"public/images/project.jpg\"> </div><div class=\"btn-projectt\"> <button style=\"z-index: 999999\" id=\"btn-delete-project\"><i onclick='myproject(this)' class=\"far fa-trash-alt d-flex justify-content-end\"></i></button></div></div></div>";
                let div_img_black = "<div id='project' style='height:"+height[i]+"; background-color:"+bg[i]+"' class=\"position-relative  cv-center project-ni project-img-one\"><div data-toggle=\"modal\" data-target=\"#ModalLoginForm\" class=\"img-project\"><img src=\"public/images/project-black.jpg\" style='height:220px;'> </div><div class=\"btn-projectt\"> <button style=\"z-index: 999999\" id=\"btn-delete-project\"><i onclick='myproject(this)' class=\"far fa-trash-alt d-flex justify-content-end\"></i></button></div></div></div>";
                if(i%10 == 0) {
                    $(".project-one").append(div_img);
                }
                if(i%10 == 2) {
                    $(".project-three").append(div_img);
                }
                if(i%10 == 3) {
                    $(".project-for").append(div_img);
                }
                if(i%10 == 4) {
                    $(".project-one").append(div_img);
                }
                if(i%10 == 1) {
                    $(".project-two").append(div_img_black);
                }
                if(i%10 == 5) {
                    $(".project-three").append(div_img_black);
                }
                if(i%10 == 6) {
                    $(".project-for").append(div_img);
                }
                if(i%10 == 7) {
                    $(".project-one").append(div_img);
                }
                if(i%10 == 8) {
                    $(".project-two").append(div_img);
                }
                if(i%10 == 9) {
                    $(".project-for").append(div_img);
                }
            }
        });
    }

    let countProject = 0;
    let date_start = [];
    let date_end = [];

    $(".btnSaveProject").click(function() {
        date_start[countProject] = $(".dateStart").val();
        date_end[countProject] = $(".dateEnd").val();
        name[countProject] = $(".name").val();
        countProject++;
        saveProject();
        loadProject();
    });

    function saveProject() {
        $(".btnSaveProject").empty();
        for (i = 0; i< countProject; i++) {
            let text = `
            <input type="hidden" name="project[${i}][start]" value="${date_start[i]}">
            <input type="hidden" name="project[${i}][name]" value="${name[i]}">
            <input type="hidden" name="project[${i}][end]" value="${date_end[i]}">
            `;
            $(".saveProject").append(text);
        }
    }
    
    //add company and university
    let year_start = ['2019'];
    let year_end = ['2019'];
    let name = ['COMPANY'];
    let developer = ['Developer'];
    let textlor = ['Lorem ipsum dolor sit amet, et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea'];
    for(t=0; t < name.length; t++) {
        let experice = `
        <div id="btn-experince" contenteditable="true" class="item-one p-2 border mb-4 border-white mr-0 mr-md-3 mr-lg-3">
                    <h4 class="m-0">(<input class="input-year" type="text" name="year_start" maxlength="4" value="${year_start}">-<input class="input-year" type="text" maxlength="4" name="year_end" value="${year_end}">) <input class="input-title" type="text" name="company" value="${name}">
                            <button class="btn-experince" type="button">
                                <i onclick="myexperince(this)" class="far fa-trash-alt d-flex justify-content-end"></i>
                            </button>
                        </h4>
                        <input class="input-title p-0 m-0" type="text" name="developer" value="${developer}">
                        <textarea rows="3" class="text-left input-yi p-0 m-0" type="text" name="description" value="">${textlor}</textarea>
                    </div>
        `;
        $(".box").append(experice);
        $(".box-edu").append(experice);
    }

    $(".btn-add-experince").click(function() {  
        let experice = `
        <div id="btn-experince" contenteditable="true" class="item-one p-2 border mb-4 border-white mr-0 mr-md-3 mr-lg-3">
                    <h4 class="m-0">(<input class="input-year" type="text" name="year_start" maxlength="4" value="${year_start}">-<input class="input-year" type="text" name="year_end" maxlength="4" value="${year_end}">) <input class="input-title" type="text" name="company" value="${name}">
                            <button class="btn-experince" type="button">
                                <i onclick="myexperince(this)" class="far fa-trash-alt d-flex justify-content-end"></i>
                            </button>
                        </h4>
                        <input class="input-title p-0 m-0" type="text" name="developer" value="${developer}">
                        <textarea rows="3" class="text-left input-yi p-0 m-0" type="text" name="description" value="">${textlor}</textarea>
                    </div>
        `;
        $(".box").append(experice);
    });


    $(".btn-add-experince-right").click(function() {
        let education = `
        <div id="btn-experince" contenteditable="true" class="item-one p-2 border mb-4 border-white mr-0 mr-md-3 mr-lg-3">
                    <h4 class="m-0">(<input class="input-year" type="text" name="year_start" value="${year_start}">-<input class="input-year" type="text" name="year_end" value="${year_end}">) <input class="input-title" type="text" name="company" value="${name}">
                            <button class="btn-experince" type="button">
                                <i onclick="myexperince(this)" class="far fa-trash-alt d-flex justify-content-end"></i>
                            </button>
                        </h4>
                        <input class="input-title p-0 m-0" type="text" name="developer" value="${developer}">
                        <textarea rows="3" class="text-left input-yi p-0 m-0" type="text" name="description" value="">${textlor}</textarea>
                    </div>
        `;
        $(".box-edu").append(education);
    });

    //add skill IT
    let pt = ["50"];
    let skill = ["HTML/CSS"];
    $(".btn-add-chart").click(function() {
        let chart = `<div class="skill-item col-6 col-sm-4 col-md-6 col-lg-4">
                        <div class="chart-mazu" style="" data-percentage="50">
                            <div class="btn-skill-left">
                            <button id="btn-delete-skill-left" type="button">
                                    <i onclick="myskillleft(this)" class="far fa-trash-alt d-flex justify-content-end">
                                    </i>
                            </button>
                            </div>
                            <svg class="circle-chart" viewBox="0 0 33.83098862 33.83098862">
                                <circle class="circle-chart__background" cx="16.9" cy="16.9" r="15.9"></circle>
                                <circle class="circle-chart__circle success-stroke" stroke-dasharray="${pt},100" cx="16.9" cy="16.9" r="15.9"></circle>
                                <g class="circle-chart__info">
                                    <text class="circle-chart__percent" x="17.9" y="15.5">
                                    </text>
                                </g>
                            </svg>
                            <input class="span-white-per-number" type="text" name="percent" value="${pt}%">
                                <br>
                            <input class="input-yi span-white-per-text p-0 m-0" value="HTML/CSS" type="text" name="skill">
                        </div>  
                    </div>`;
        $(".btn-chart").before(chart);
    });

    $(document).on('change', '.span-white-per-number', function() {
        let pt = parseInt($(this).val());
        if(parseInt($(this).val()) > 100 || parseInt($(this).val()) < 10) {
            alert('Bạn không được nhập lớn hơn 100% và nhỏ hơn 10%');
            let chart = `<div class="chart-mazu" style="" data-percentage="50">
                            <div class="btn-skill-left">
                                <button id="btn-delete-skill-left" type="button">
                                    <i onclick="myskillleft(this)" class="far fa-trash-alt d-flex justify-content-end">
                                    </i>
                                </button>
                            </div>
                            <svg class="circle-chart" viewBox="0 0 33.83098862 33.83098862">
                                <circle class="circle-chart__background" cx="16.9" cy="16.9" r="15.9"></circle>
                                <circle class="circle-chart__circle success-stroke" stroke-dasharray="50,100" cx="16.9" cy="16.9" r="15.9"></circle>
                                <g class="circle-chart__info">
                                    <text class="circle-chart__percent" x="17.9" y="15.5">
                                    </text>
                                </g>
                            </svg>
                            <input class="span-white-per-number" type="text" name="percent" value="50%">
                            <br>
                            <input class="input-yi span-white-per-text p-0 m-0" value="HTML/CSS" type="text" name="skill">
                        </div>  
        `;
        $(this).closest('.skill-item').html(chart);
        }

        let chart = `<div class="chart-mazu" style="" data-percentage="50">
                            <div class="btn-skill-left">
                                <button id="btn-delete-skill-left" type="button">
                                    <i onclick="myskillleft(this)" class="far fa-trash-alt d-flex justify-content-end">
                                    </i>
                                </button>
                            </div>
                            <svg class="circle-chart" viewBox="0 0 33.83098862 33.83098862">
                                <circle class="circle-chart__background" cx="16.9" cy="16.9" r="15.9"></circle>
                                <circle class="circle-chart__circle success-stroke" stroke-dasharray="${pt},100" cx="16.9" cy="16.9" r="15.9"></circle>
                                <g class="circle-chart__info">
                                    <text class="circle-chart__percent" x="17.9" y="15.5">
                                    </text>
                                </g>
                            </svg>
                            <input class="span-white-per-number" type="text" name="percent" value="${pt}%">
                            <br>
                            <input class="input-yi span-white-per-text p-0 m-0" value="HTML/CSS" type="text" name="skill">
                        </div>  
        `;
        $(this).closest('.skill-item').html(chart);
    });

    //add owl carousel
    let h = 1;
    let img = ["anhDD.jpg"];
    let lorem = ["Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur."];
    $(".btn-add-references").click(function(){
        $('#truong').trigger('add.owl.carousel', [$(`<div class="slide item row"> 
                <div class="slide-img col-12 col-sm-12 col-md-3 col-lg-3 position-relative d-flex">
                    <img class="imgSlide mx-auto" src="public/images/${img}" alt="">
                    <label>
                        <input type="button" class="d-none" onchange="readURLSl(this);" type="file" name="avatar" value="">
                    </label>
                </div>
                <div class="slide-text col-12 col-sm-12 col-md-9 col-lg-9 position-relative ">
                <span class="slide-sapn slide-sapn-one position-absolute">“</span>
                <textarea rows="5" class="text-justify text-left input-yi" type="text" name="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum</textarea>
                    <span class="slide-sapn slide-sapn-two position-absolute">”</span>
                </div>
            </div>`), 0]).trigger('refresh.owl.carousel');
    });

    //confirm delete
    function ConfirmDelete(mess) {
        if (window.confirm(mess)) {
            return true;
        }
        return false;
    }

    //delay messages
    $("div.alert").delay(4000).slideUp();

    $("div.register").delay(4000).slideUp();

    //name change name
    $('#nameOne').keyup(function() {
        let name_value = $(this).val();
        $('#nameTwo').val(name_value);
    });

    $('#nameTwo').keyup(function() {
        let name_value = $(this).val();
        $('#nameOne').val(name_value);
    });

    //upload avatar
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    function readURLSl(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.imgSlide')
                .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    function readURLBg(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.header-top')
                .attr('style', "background-image: url(" + e.target.result +")");
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    $(function() {
        $( ".datepicker-11" ).datepicker({
            dateFormat: "yy - mm - dd",
            changeYear: true
        });
    });

    $(function() {
        $( ".datepicker-12" ).datepicker({
            dateFormat: "yy - mm - dd",
            changeYear: true
        });
    });
    
    $(document).ready(function() {
        $('#truong').owlCarousel({
            autoplayTimeout: 5000,
            items: 1,
            nav: true,
            dots: true,
            loop: true,
            margin: 10,
            responsive: {
                1200: {
                    items: 1,
                }
            }
        });
    });

    function validateName(minlength, maxlength, id) {
        if ($(this).text() <= minlength || $(this).text() >= minlength) {
            return true;
        }
        else {
            alert('error');
        }
    }

    //validate cv ajax
    $().ready(function() {
        $("#cv-validate").validate({
            onfocusout: true,
            onkeyup: true,
            onclick: true,
            groups: {
                nameGroup: "firstName middleName lastName"
            },
            rules: {
                "name": {
                    required: true,
                    maxlength: 150,
                    minlength: 10,
                },
                "developer": {
                    required: true,
                    maxlength: 150,
                    minlength: 10
                },
                "date": {
                    required: true,
                    maxlength: 15,
                    minlength: 5,
                },
                "phone": {
                    required: true,
                    maxlength: 13,
                    minlength: 8,
                    digits: true
                },
                "email": {
                    required: true,
                    maxlength: 50,
                    minlength: 10
                },
                "facebook": {
                    required: true,
                    maxlength: 50,
                    minlength: 5
                },
                "skype": {
                    required: true,
                    maxlength: 50,
                    minlength: 5
                },
                "chartwork": {
                    required: true,
                    maxlength: 50,
                    minlength: 5
                },
                "address": {
                    required: true,
                    maxlength: 50,
                    minlength: 5
                },
                "sumary": {
                    required: true,
                    maxlength: 350,
                    minlength: 50
                },
                "professional_skill_des": {
                    required: true,
                    maxlength: 350,
                    minlength: 50
                },
                "personal_skill_des": {
                    required: true,
                    maxlength: 350,
                    minlength: 50
                },
                "work_experience_des": {
                    required: true,
                    maxlength: 350,
                    minlength: 50
                },
                "education_des": {
                    required: true,
                    maxlength: 350,
                    minlength: 50
                },
                "title_cv": {
                    required: true,
                    maxlength: 200,
                    minlength: 10
                },
            },
        });
    });
    $().ready(function() {
        $("#btn-save-infor").validate({
            onfocusout: true,
            onkeyup: true,
            onclick: true,
            groups: {
                nameGroup: "name date_start date_end"
            },
            rules: {
                "name": {
                    required: true,
                    maxlength: 200,
                    minlength: 10
                },
                "date_start": {
                    required: true,
                },
                "date_end": {
                    required: true,
                },
            },
            
        });
    });