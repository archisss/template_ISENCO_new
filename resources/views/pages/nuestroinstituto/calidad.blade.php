@extends('master')
@section('content')

<!-- Breacrumb Visión Misión-->
<div class="breadcrumb-area" data-black-overlay="2">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                <div class="cr-breadcrumb text-center">
                    <h1>Sistema de Gestión de la Calidad</h1>
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
                    <h3>Política de Calidad<span class="secondary-theme-color"></span></h3>
                    <p>En el Instituto Superior de Educación Normal del Estado de Colima "Profr. Gregorio Torres Quintero” nos dedicamos a proporcionar servicios de educación media superior y superior, de manera eficaz y eficiente, a través de la planeación, acompañamiento, seguimiento y evaluación del desempeño y los resultados de procesos y procedimientos, para contribuir al logro del perfil de egreso de nuestros alumnos de acuerdo a los planes y programas de estudio vigentes; apoyados en la normatividad actual así como en la ISO 9001:2008.</p>
                    <br/><br/>
                    <h3>Objetivos de Calidad <span class="secondary-theme-color"></span></h3>
                    <ol>
                        <li>Incrementar en un 5% la eficacia de un servicio por área que el Instituto brinda con respecto a la línea base de satisfacción de nuestros usuarios, a diciembre de 2015.</li>
                        <li>Incrementar en un 2% la eficiencia de un servicio por área que el Instituto brinda con respecto a la línea base de satisfacción de nuestros usuarios, a diciembre de 2015.</li>
                        <li>Cumplir con el 80% de planeaciones docentes en tiempo y forma por semestre.</li>
                        <li>Valorar que las planeaciones incluyan en un 80% los elementos de acuerdo a planes y programas de estudio vigentes.</li>
                        <li>Diseñar e implementar un sistema de evaluación del desempeño de los docentes en el aula para diciembre de 2015.</li>
                        <li>Mejorar en un 5% los niveles bueno y excelente de desempeño de los alumnos de educación media superior de acuerdo con la prueba ENLACE.</li>
                        <li>Incrementar en un 5% el nivel 3 de desempeño de los alumnos de educación superior de acuerdo con el examen de oposición.</li>
                    </ol>
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