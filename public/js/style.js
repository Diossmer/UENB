$(".sidebar-header").click(function(){
    $(".components").slideToggle("show");
});
$('.representante').hide();
$('.anioescolar').hide();
$('.alumno').hide();
$(".formularios").click(function(){
    if(this.value == 'representante'){
        confirm("Se adiciona Nuevo registro de Representante");
        $(".representante").show(2000);
    }else if(this.value == "alumno"){
        confirm("Se adiciona Nuevo registro de Alumnos");
        $(".alumno").show(2000);
    }else if(this.value == "anioescolar"){
        confirm("Se adiciona Nuevo registro de Año Escolar");
        $(".anioescolar").show(2000);
    }else{
        confirm("Seleccione el rol de registro.");
        $('.representante').hide(2000);
        $('.anioescolar').hide();
        $('.alumno').hide(2000);
    }
});

