    let skpc = ['60'];
    let skn = ['Skill name'];
    $(".btn-edit-sumary").click(function() {
        let skillAdd = `<div class="skill-items"><div id="team-delete" class="team-chart mt-4 mr-md-4 ml-md-4 row">${skn}<br>
        <div class="col-md-12 team-chart-div mt-4">
        <div class="col-md-12 p-0 d-flex justify-content-end team-chart-one" style="width: ${skpc}% !important">
        <span class="skill-pc team-chart-span mt-3 " contenteditable="true">${skpc}%</span></div>
        </div><button class="btn-delete">
        <i onclick="myfunction(this)" class="far fa-trash-alt d-flex justify-content-end"></i>
        </button></div></div>`;
        $(".btn-edit-sumary").parents('.team-chart').before(skillAdd);
    });

    $(document).on('blur', '.skill-pc', function() {
        let skpc = parseInt($(this).text());
        let skillAdd = `<div class="skill-items"><div id="team-delete" class="team-chart mt-4 mr-md-4 ml-md-4 row">${skn}<br>
        <div class="col-md-12 team-chart-div mt-4">
        <div class="col-md-12 p-0 d-flex justify-content-end team-chart-one" style="width: ${skpc}% !important">
        <span class="skill-pc team-chart-span mt-3 " contenteditable="true">${skpc}%</span></div>
        </div><button class="btn-delete">
        <i onclick="myfunction(this)" class="far fa-trash-alt d-flex justify-content-end"></i>
        </button></div></div>
        `;
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
            let div_img = "<div id='project' style='height:"+height[i]+"; background-color:"+bg[i]+"' class=\"position-relative cv-center project-ni project-img-one\"><div data-target=\"#ModalLoginForm\" class=\"img-project\"><img src=\"public/images/project.jpg\"> </div><div class=\"btn-projectt\"> <button style=\"z-index: 999999\" id=\"btn-delete-project\"><i onclick='myproject(this)' class=\"far fa-trash-alt d-flex justify-content-end\"></i></button></div></div></div>";
            let div_img_black = "<div id='project' style='height:"+height[i]+"; background-color:"+bg[i]+"' class=\"position-relative  cv-center project-ni project-img-one\"><div data-target=\"#ModalLoginForm\" class=\"img-project\"><img src=\"public/images/project-black.jpg\" style='height:220px;'> </div><div class=\"btn-projectt\"> <button style=\"z-index: 999999\" id=\"btn-delete-project\"><i onclick='myproject(this)' class=\"far fa-trash-alt d-flex justify-content-end\"></i></button></div></div></div>";
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
    
    //add company and university
    let year_start = [];
    let year_end = [];
    let name = [];
    let develop = [];
    let textlor = [];
    for(t=0; t<name.length; t++) {
        let experice = '<div id="btn-experince" contenteditable="true" class="item-one p-2 border mb-4 border-white mr-0 mr-md-3 mr-lg-3"><h4 class="m-0">('+year_start[t]+' - '+year_end[t]+') '+name[t]+'<button class="btn-experince"><i onclick="myexperince(this)" class="far fa-trash-alt d-flex justify-content-end"></i></button></h4><p class="p-0 m-0">'+develop[t]+'</p><p class="p-0 m-0">'+textlor[t]+'</p></div>';
        $(".box").append(experice);
        $(".box-edu").append(experice);
    }

    $(".btn-add-experince").click(function() {
        year_start.push("2019");
        year_end.push("2020");
        name.push("COMPANY");
        develop.push("Developer");
        textlor.push("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea");
        let experice = '<div id="btn-experince" contenteditable="true" class="item-one p-2 border mb-4 border-white mr-0 mr-md-3 mr-lg-3"><h4 class="m-0">('+year_start[t]+' - '+year_end[t]+') '+name[t]+'<button class="btn-experince"><i onclick="myexperince(this)" class="far fa-trash-alt d-flex justify-content-end"></i></button></h4><p class="p-0 m-0">'+develop[t]+'</p><p class="p-0 m-0">'+textlor[t]+'</p></div>';
        $(".box").append(experice);
    });

    $(".btn-add-experince-right").click(function() {
        year_start.push("2012");
        year_end.push("2021");
        name.push("University");
        develop.push("Developer");
        textlor.push("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea");
        let experice = '<div id="btn-experince" contenteditable="true" class="item-one p-2 border mb-4 border-white mr-0 mr-md-3 mr-lg-3"><h4 class="m-0">('+year_start[t]+' - '+year_end[t]+') '+name[t]+'<button class="btn-experince"><i onclick="myexperince(this)" class="far fa-trash-alt d-flex justify-content-end"></i></button></h4><p class="p-0 m-0">'+develop[t]+'</p><p class="p-0 m-0">'+textlor[t]+'</p></div>';
        $(".box-edu").append(experice);
    });

    //add skill IT
    let pt = ["50"];
    let skill = ["HTML/CSS"];
    $(".btn-add-chart").click(function() {
        let chart = `<div class="skill-item col-6 col-sm-4 col-md-6 col-lg-4">
        <div class="chart-mazu" style="" data-percentage="50">
        <div class="btn-skill-left">
        <button id="btn-delete-skill-left">
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
        <span class="span-white-per-number" contenteditable="true">${pt}%</span>
        <br>
        </svg>
        <span class="span-white-per-text p-0 m-0" contenteditable="true">HTML/ CSS</span>
        </div>  
        </div>`;
        $(".btn-chart").before(chart);
    });

    $(document).on('blur', '.span-white-per-number', function() {
        let pt = parseInt($(this).text());
        let chart = `
        <div class="chart-mazu" style="" data-percentage="50">
        <div class="btn-skill-left">
        <button id="btn-delete-skill-left">
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
        </g><span class="span-white-per-number" contenteditable="true">${pt}%</span>
        <br>
        </svg>
        <span class="span-white-per-text p-0 m-0" contenteditable="true">HTML/ CSS</span>
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
            <input class="d-none" onchange="readURLSl(this);" type="file" name="avatar" value="">
            </label>
            </div>
            <div class="slide-text col-12 col-sm-12 col-md-9 col-lg-9 position-relative "><span class="slide-sapn slide-sapn-one position-absolute">“</span><p contenteditable>
            ${lorem}
            <span class="slide-sapn slide-sapn-two position-absolute">”</span></p>
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
        $( "#datepicker-11" ).datepicker({
            dateFormat: "yy - mm - dd",
            changeYear: true
        });
    });

    $(function() {
        $( "#datepicker-12" ).datepicker({
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
                    minlength: 50
                },
            },
            
        });
    });