


    <?php if(Session::get('success')): ?>
    <div class="alert alert-success">
       {{Session::get('success')}}

    </div>
    <?php endif; ?>
    <?php if(Session::get('info')): ?>

     <div class="alert alert-info">
       {{Session::get('info')}}

     </div>
     <?php endif; ?>
     <?php if(Session::get('error')): ?>

     <div class="alert alert-danger">
       {{Session::get('erro ')}}

     </div>
     <?php endif; ?>
     <?php if($errors->count()>0): ?>

      @foreach($errors->all() as $error)
         <div class="alert alert-danger">
         {{$error}}

        </div>
      @endforeach
      <?php endif; ?>
