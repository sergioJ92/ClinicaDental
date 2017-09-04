		  {{ csrf_field() }}  
	      <div class="row">
	        <div class="input-field col s6">
	          {!!Form::label('nombre','Nombre')!!}
	          {!!Form::text('nombre',null,['class'=>'validate' ])!!}
	        </div>

	        <div class="input-field col s6">
	          {!!Form::label('apellido','Apellido')!!}
	          {!!Form::text('apellido',null,['class'=>'validate' ])!!}
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s12">
	          {!!Form::label('usuario','Usuario')!!}
	          {!!Form::text('usuario',null,['class'=>'validate' ])!!}
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s12">
	          {!!Form::label('password','Contraceña')!!}
	          {!!Form::password('password',['class'=>'validate' ])!!}
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s12">
	          {!!Form::label('password','Contraceña')!!}
	          {!!Form::password('password',['class'=>'validate' ])!!}
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s12">
	          {!!Form::label('email','Email')!!}
	          {!!Form::email('email',null,['class'=>'validate' ])!!}
	        </div>
	      </div>
	      