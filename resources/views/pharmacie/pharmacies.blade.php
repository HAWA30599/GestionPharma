@extends('./../layouts/enteteGerant')


@section('page-content')

<style>

*{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
	font-family: 'Quicksand', sans-serif;
}

body{
	height: 100vh;
	width: 100%;
}

.container{
	position: relative;
	width: 100%;
	height: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
	padding: 20px 100px;
}

.container:after{
	content: '';
	position: absolute;
	width: 100%;
	height: 100%;
	left: 0;
	top: 0;
	background: url("img/bg.jpg") no-repeat center;
	background-size: cover;
	filter: blur(50px);
	z-index: -1;
}
.contact-box{
	max-width: 950px;
	display: grid;
    margin-left:20rem;
	grid-template-columns: repeat(2, 1fr);
	justify-content: center;
	align-items: center;
	text-align: center;
	background-color: #fff;
	box-shadow: 0px 0px 19px 5px rgba(0,0,0,0.19);
}

.left{
	background: url("image/home.svg") no-repeat center;
	background-size: cover;
	height: 100%;
}

.right{
	padding: 25px 40px;
}

h2{
	position: relative;
	padding: 0 0 10px;
	margin-bottom: 10px;
     font-weight:bold;
}

h2:after{
	content: '';
    position: absolute;
    left: 50%;
    bottom: 0;
    transform: translateX(-50%);
    height: 4px;
    width: 50px;
    border-radius: 2px;
    background-color: #2ecc71;
}

.field{
	width: 100%;
	border: 2px solid rgba(0, 2, 2, 0);
	outline: none;
	background-color: rgba(230, 230, 230, 0.6);
	padding: 0.5rem 1rem;
	font-size: 1.1rem;
	margin-bottom: 22px;
	transition: .3s;
}

.field:hover{
	background-color: rgba(0, 0, 0, 0.1);
}



.btn{
	width: 100%;
	padding: 0.5rem 1rem;
	background-color: #2ecc71;
	color: #fff;
	font-size: 1.1rem;
	border: none;
	outline: none;
	cursor: pointer;
	transition: .3s;
}

.btn:hover{
    background-color: #27ae60;
}

.field:focus{
    border: 2px solid rgba(30,85,250,0.47);
    background-color: #fff;
}

@media screen and (max-width: 880px){
	.contact-box{
		grid-template-columns: 1fr;
	}
	.left{
		height: 200px;
	}
}

</style>
	<div class="col-md-4 mt-5 "></div>
    @if (session()->has('success'))
         <div class="alert alert-success">
        {{session()->get('success')}}
        </div>
    @endif
		<div class="contact-box ">
			<div class="left"></div>
			<div class="right">
				<h2>Enregistrer votre Pharmacie</h2>
				<form action="{{route('pharmacie')}}" method="POST" >
                    @csrf
                    @method('post')
                    
                        <input type="text" name="nom" class="field" id="inputEmail4" placeholder="Entrer le nom ">
                    
                    @error('nom')
                        <div class="text text-danger">
                        {{$message}}
                        </div>
                    @enderror
                    <input type="text" name="adresse" class="field" id="inputAddress" placeholder="adresse">

                @error('adresse')
                    <div class="text text-danger">
                    {{$message}}
                    </div>
                @enderror
                        <input type="text" name="quartier" class="field" id="inputAddress2" placeholder="quartier">
                        @error('quartier')
                            <div class="text text-danger">
                            {{$message}}
                            </div>
                        @enderror
                    <select id="inputState" name="ville" class="field">
                    <option value="">- Choisir la ville</option>
                        <option value="Dakar" >Dakar</option>
                        <option value="Guediawaye" >Guédiawaye</option>
                        <option value="Mbour">Mbour</option>
                        <option value="Kaolack" >Kaolack</option>
                        <option value="Saint_Louis" >Saint Louis</option>
                        <option value="Thies" >Thiès</option>
                    </select>
                
                @error('ville')
                    <div class="text text-danger">
                    {{$message}}
                    </div>
                @enderror
                <input type="number" name="telephone" class="field" id="inputZip" placeholder="numero de telephone">
                @error('telephone')
                    <div class="text text-danger">
                    {{$message}}
                @enderror
               <input class="btn btn-success mt-2 mb-4" type="submit" name="submit_form" value="Enregistrer">
            </form>
            </div>

		</div>
	</div>
</body>
</html>




@endsection
 