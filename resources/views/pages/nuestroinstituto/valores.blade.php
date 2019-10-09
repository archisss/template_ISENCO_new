@extends('master')
@section('content')

<!-- Breacrumb Visión Misión-->
<div class="breadcrumb-area" data-black-overlay="2">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                <div class="cr-breadcrumb text-center">
                    <h1>Valores del Instituto</h1>
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
                    <h3>Respeto <span class="secondary-theme-color"></span></h3>
                    <p>Trato con dignidad a los demás, a la naturaleza, al entorno material y así mismo. <br/>
                        Respeto a mí mismo y respeto mútuo. Reciclando, reutilizando. Escuchando. Tratar como quiero ser tratado. Tratando y respetando a los demás según sus características individuales. Siendo prudente. Brindando una buena atención a los demás procurando su bienestar.</p>
                    <br/><br/>
                    <h3>Honestidad <span class="secondary-theme-color"></span></h3>
                    <p>Ser congruente con lo que se piensa, dice y se hace, conforme a principios y valores como la verdad y la justicia. <br/>
                        Predicando con el ejemplo, siendo sincero con uno mismo. Ser objetivo estando abierto a la crítica y a la evaluación y autoevaluación.</p>
                    <br/><br/>
                    <h3>Responsabilidad <span class="secondary-theme-color"></span></h3>
                    <p>Cumplir con nuestras funciones y obligaciones en la sociedad. <br/>
                        Cumpliendo con los compromisos. Comprometiéndonos a hacer bien nuestro trabajo. Haciendo las cosas con eficiencia y eficacia dando un buen servicio. Aceptar las consecuencias de nuestros actos.</p>
                    <br/><br/>
                    <h3>Tolerancia <span class="secondary-theme-color"></span></h3>
                    <p>Aceptar a los demás respetando sus individualidades.
                        Aceptando con cordialidad las diferencias de los demás. Escuchando y prestando atención a los demás. Entendiendo que cada individuo es diferente a mí. Siendo empáticos.</p>
                    <br/><br/>
                    <h3>Solidaridad <span class="secondary-theme-color"></span></h3>
                    <p>Apoyo incondicional hacia los demás en la búsqueda del bien común.
                        Con participación, colaboración y apoyo responsable. Siendo empáticos. Teniendo sensibilidad hacia las necesidades de los demás.</p>
                    <br/><br/>
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