    var skpc = ["65%", "65%", "65%"];
    var skn = ["TEAMWORK", "ENGLISH", "PASSWORD"];
    for(a = 0; a < skpc.length; a++){
        var skilladd = '<div id="team-delete" class="team-chart mx-1 mr-md-4 ml-md-4 row">'+skn[a]+' <br><div class="col-md-12 team-chart-div mt-4"><div class="col-md-12 p-0 d-flex justify-content-end team-chart-one"><span class="team-chart-span mt-3 " contenteditable="true">60%</span></div></div><button class="btn-delete"><i onclick="myfunction(this)" class="far fa-trash-alt d-flex justify-content-end"></i></button></div><br>';
        $(".btn-edit-sumary").parents('.team-chart').before(skilladd);
    }

    $(".btn-edit-sumary").click(function() {
        var skilladd = '<div id="team-delete" class="team-chart mx-1 mr-md-4 ml-md-4 row">TEAM WORD <br><div class="col-md-12 team-chart-div mt-4"><div class="col-md-12 p-0 d-flex justify-content-end team-chart-one"><span class="team-chart-span mt-3 " contenteditable="true">60%</span></div></div><button class="btn-delete"><i onclick="myfunction(this)" class="far fa-trash-alt d-flex justify-content-end"></i></button></div><br>';
        $(".btn-edit-sumary").parents('.team-chart').before(skilladd);
    });

    function myfunction(x){
        $(x).closest('#team-delete').addClass('removeSkill').remove();
    }

    function myproject(x){
        $(x).closest('#project').addClass('removeProject').remove();
    }

    function myexperince(x){
        $(x).closest('.item-one').addClass('removeExperince').remove();
    }

    function myskillleft(x){
        $(x).closest('.chart-mazu').addClass('removeSkillLeft').remove();
    }

/*    function myrefer(x){
        $(x).closest('.slide').addClass('removeRefer').remove();
    }*/

    $("#btn-delete-refer").click(function() {
        var indexToRemove = 2;
        $(".owl-carousel").trigger('remove.owl.carousel', [indexToRemove]).trigger('refresh.owl.carousel');
    });

    let j = 9;
    let height = ["200px","400px","200px","200px","200px","400px","200px","200px","200px","200px"];
    let bg = ["#FD7038","#EECD10","#2F2FA1","#F64C71","#333333","#EF5B5B","#F9BC2D","#F64C71","#333333","#FD7038"];
    for (i = 0; i < j; i++) {
        let div_img = "<div id='project' style='height:"+height[i]+"; background-color:"+bg[i]+"' class=\"position-relative cv-center project-ni project-img-one\"><div class=\"img-project\"><img src=\"images/project.jpg\"> </div><div class=\"btn-projectt\"> <button id=\"btn-delete-project\"><i onclick='myproject(this)' class=\"far fa-trash-alt d-flex justify-content-end\"></i></button></div></div>";
        let div_img_black = "<div id='project' style='height:"+height[i]+"; background-color:"+bg[i]+"' class=\"position-relative  cv-center project-ni project-img-one\"><div class=\"img-project\"><img src=\"images/project-black.jpg\" style='height:220px;'> </div><div class=\"btn-projectt\"> <button id=\"btn-delete-project\"><i onclick='myproject(this)' class=\"far fa-trash-alt d-flex justify-content-end\"></i></button></div></div>";
        if(i%10 == 0){
            $(".project-one").append(div_img);
        }
        if(i%10 == 1){
            $(".project-two").append(div_img_black);
        }
        if(i%10 == 2){
            $(".project-three").append(div_img);
        }
        if(i%10 == 3){
            $(".project-for").append(div_img);
        }
        if(i%10 == 4){
            $(".project-one").append(div_img);
        }
        if(i%10 == 5){
            $(".project-three").append(div_img_black);
        }
        if(i%10 == 6){
            $(".project-for").append(div_img);
        }
        if(i%10 == 7){
            $(".project-one").append(div_img);
        }
        if(i%10 == 8){
            $(".project-two").append(div_img);
        }
        if(i%10 == 9){
            $(".project-for").append(div_img);
        }
    }

    $(".btn-add-project").click(function() {
        j++;
        if(j == height.length){
            height.push("200px","400px","200px","200px","200px","400px","200px","200px","200px","200px");
            bg.push("#FD7038","#EECD10","#2F2FA1","#F64C71","#333333","#EF5B5B","#F9BC2D","#F64C71","#333333","#FD7038");
        }

        $(".project-one").empty();
        $(".project-two").empty();
        $(".project-three").empty();
        $(".project-for").empty();

        for (i = 0; i < j; i++) {
        let div_img = "<div id='project' style='height:"+height[i]+"; background-color:"+bg[i]+"' class=\"cv-center project-ni project-img-one\"><div class=\"img-project\"><img src=\"images/project.jpg\"> </div><div class=\"btn-projectt\"> <button id=\"btn-delete-project\"><i onclick='myproject(this)' class=\"far fa-trash-alt d-flex justify-content-end\"></i></button></div></div> ";
        let div_img_black = "<div id='project' style='height:"+height[i]+"; background-color:"+bg[i]+"' class=\"position-relative  cv-center project-ni project-img-one\"><div class=\"img-project\"><img src=\"images/project-black.jpg\" style='width: 220px;'> </div><div class=\"btn-projectt\" > <button id=\"btn-delete-project\"><i onclick='myproject(this)' class=\"far fa-trash-alt d-flex justify-content-end\"></i></button></div></div>";
            if(i%10 == 0){
                $(".project-one").append(div_img);
            }
            if(i%10 == 1){
                $(".project-two").append(div_img_black);
            }
            if(i%10 == 2){
                $(".project-three").append(div_img);
            }
            if(i%10 == 3){
                $(".project-for").append(div_img);
            }
            if(i%10 == 4){
                $(".project-one").append(div_img);
            }
            if(i%10 == 5){
                $(".project-three").append(div_img_black);
            }
            if(i%10 == 6){
                $(".project-for").append(div_img);
            }
            if(i%10 == 7){
                $(".project-one").append(div_img);
            }
            if(i%10 == 8){
                $(".project-two").append(div_img);
            }
            if(i%10 == 9){
                $(".project-for").append(div_img);
            }
        }
    });

    let title = ["(2010 - 2019) ABC COMPANY", "(2010 - 2019) ABC COMPANY", "(2010 - 2019) ABC COMPANY"];
    let develop = ["Developer", "Developer", "Developer"];
    let textlor = ["Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy","Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy","Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy"];
    for(t=0; t<title.length; t++){
        let experice = '<div id="btn-experince" contenteditable="true" class="item-one p-2 border mb-4 border-white mr-0 mr-md-3 mr-lg-3"><h4 class="m-0">'+title[t]+'<button class="btn-experince"><i onclick="myexperince(this)" class="far fa-trash-alt d-flex justify-content-end"></i></button></h4><p class="p-0 m-0">'+develop[t]+'</p><p class="p-0 m-0">'+textlor[t]+'</p></div>';
        $(".box").append(experice);
        $(".box-edu").append(experice);
    }

    $(".btn-add-experince").click(function() {
        title.push("(2010 - 2020) ACEDAMY");
        develop.push("Developer");
        textlor.push("Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy");
        let experice = '<div id="btn-experince" contenteditable="true" class="item-one p-2 border mb-4 border-white mr-0 mr-md-3 mr-lg-3"><h4 class="m-0">'+title[t]+'<button class="btn-experince"><i onclick="myexperince(this)" class="far fa-trash-alt d-flex justify-content-end"></i></button></h4><p class="p-0 m-0">'+develop[t]+'</p><p class="p-0 m-0">'+textlor[t]+'</p></div>';
        $(".box").append(experice);
    });

    $(".btn-add-experince-right").click(function() {
        title.push("(2010 - 2020) ACEDAMY123");
        develop.push("Developer");
        textlor.push("Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy");
        let experice = '<div id="btn-experince" contenteditable="true" class="item-one p-2 border mb-4 border-white mr-0 mr-md-3 mr-lg-3"><h4 class="m-0">'+title[t]+'<button class="btn-experince"><i onclick="myexperince(this)" class="far fa-trash-alt d-flex justify-content-end"></i></button></h4><p class="p-0 m-0">'+develop[t]+'</p><p class="p-0 m-0">'+textlor[t]+'</p></div>';
        $(".box-edu").append(experice);
    });

    let pt = ["50"];
    let skill = ["HTML/CSS"];
    $(".btn-add-chart").click(function() {
        let chart = ' <div class="chart-mazu col-6 col-sm-4 col-md-6 col-lg-4" style="" data-percentage="50"><div class="btn-skill-left"> <button id="btn-delete-skill-left"><i onclick="myskillleft(this)" class="far fa-trash-alt d-flex justify-content-end"></i></button></div><svg class="circle-chart" viewBox="0 0 33.83098862 33.83098862"><circle class="circle-chart__background" cx="16.9" cy="16.9" r="15.9"></circle><circle class="circle-chart__circle success-stroke" stroke-dasharray="'+pt+',100" cx="16.9" cy="16.9" r="15.9"></circle><g class="circle-chart__info"><text class="circle-chart__percent" x="17.9" y="15.5"></text></g><span class="span-white-per-number" contenteditable="true">'+pt+'%</span><br></svg><span class="span-white-per-text p-0 m-0" contenteditable="true">'+skill+'</span></div>';
        $(".btn-chart").before(chart);
    });

    let h = 3;
    let img = ["Rectangle.jpg","Rectangle.jpg","Rectangle.jpg"];
    let rct = ["Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum."];

    $(".btn-add-references").click(function() {
       /*var text = '<div class="slide item row"><div class="slide-img col-12 col-sm-12 col-md-3 col-lg-3 position-relative d-flex"><img class="" src="images/avatar-ref.jpg" alt=""></div><div class="slide-text col-12 col-sm-12 col-md-9 col-lg-9 position-relative "><p><span class="slide-sapn slide-sapn-one position-absolute">“</span>3 Lorem um.<span class="slide-sapn slide-sapn-two position-absolute">”</span></p></div></div>';*/
        //$('.owl-carousel').owlCarousel('add', '<div class="slide item row"><div class="slide-img col-12 col-sm-12 col-md-3 col-lg-3 position-relative d-flex"><img class="" src="images/avatar-ref.jpg" alt=""></div><div class="slide-text col-12 col-sm-12 col-md-9 col-lg-9 position-relative "><p><span class="slide-sapn slide-sapn-one position-absolute">“</span>'+rct+'<span class="slide-sapn slide-sapn-two position-absolute">”</span></p></div></div>').owlCarousel('update');
        $('#truong').trigger('add.owl.carousel', [$('<div class="slide item row"><div class="slide-img col-12 col-sm-12 col-md-3 col-lg-3 position-relative d-flex"><img class="" src="images/avatar-ref.jpg" alt=""></div><div class="slide-text col-12 col-sm-12 col-md-9 col-lg-9 position-relative "><p><span class="slide-sapn slide-sapn-one position-absolute">“</span>'+rct+'<span class="slide-sapn slide-sapn-two position-absolute">”</span></p></div></div>'), 0]).trigger('refresh.owl.carousel');
/*        $('.owl-dot').click(function () {
            owl.trigger('to.owl.carousel', [$(this).index(), 300]);
        });*/
});