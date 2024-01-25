
@extends('layouts.mainLayout')
@section('content')
    

<div class="cycle">
    <div>
        <label for="touch"><span>DEUST</span></label>
        <input type="checkbox" id="touch">
        <ul class="slide">
            <li><a href="deust/MIP">MIP</a></li>
            <li><a href="deust/MIPC">MIPC</a></li>
            <li><a href="deust/GE-GM">GE-GM</a></li>
            <li><a href="deust/BCG">BCG</a></li>
        </ul>
    </div>
    <div>
        <label for="touch2"><span>licence</span></label>
        <input type="checkbox" id="touch2">
        <ul class="slide">
            <li><a href="licence/AD"> Analytique des données(AD)</a></li>
            <li><a href="licence/IDAI">Ingénierie de développement d’applications informatiques</a></li>
        </ul>
    </div>
    <div>
        <label for="touch3"><span>master</span></label>
        <input type="checkbox" id="touch3">
        <ul class="slide">
            <li><a href="#">MIP</a></li>
            <li><a href="#">MIPC</a></li>
            <li><a href="#">BCG</a></li>
            <li><a href="#">GE-GM</a></li>
        </ul>
    </div>
    <div>
        <label for="touch4"><span>ingenieur</span></label>
        <input type="checkbox" id="touch4">
        <ul class="slide">
            <li><a href="#">MIP</a></li>
            <li><a href="#">MIPC</a></li>
            <li><a href="#">BCG</a></li>
            <li><a href="#">GE-GM</a></li>
        </ul>
    </div>
   <!-- <div>licence</div>
    <div>master</div>
    <div></div>-->
</div>
@endsection