@extends('master')
@section('content')

<!-- Breacrumb Visión Misión-->
<div class="breadcrumb-area" data-black-overlay="2">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                <div class="cr-breadcrumb text-center">
                    <h1>Misión y Visión</h1>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--// Breacrumb Vision Misión -->

<!-- Visión Us Area -->
<section class="about-us-area pt--80">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="about-content about-content-4 pb--65 pt--50">
                    <h3>Misión <span class="secondary-theme-color"></span></h3>
                    <p>El Instituto Superior de Educación Normal del Estado de Colima "Profr. Gregorio Torres Quintero” es una institución pública que ofrece servicios educativos de nivel medio superior basado en competencias para favorecer la preparación integral de bachilleres con conocimiento de cultura general y valores, y de nivel superior, orientada a formar profesionales en docencia para la educación básica.</p>
                    <br/><br/>
                    <h3>Visión <span class="secondary-theme-color"></span></h3>
                    <p>Al 2018 somos una Institución con alto prestigio académico que brinda formación inicial y continua de docentes competentes para la educación básica, con programas educativos acreditados por CIEES bajo normas que dirigen los procesos académicos y administrativos dentro de un sistema de gestión de calidad que incentiva la cultura de la planeación participativa y la evaluación institucional, con docentes en constante actualización profesional y trabajo colegiado, que atienden de manera integral el proceso educativo e implementando estrategias didácticas innovadoras que procuran mejorar los aprendizajes y resultados en las evaluaciones internas y externas, dando solidez a nuestros valores y destacando las competencias profesionales de los egresados.</p>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="about-left-image">
                    <img src="{{ asset('dist/images/about/1.png') }}" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>
<!--// Visión Us Area -->
@endsection