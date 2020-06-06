<div class="content">
  {!! Form::open(["method"=>"post","action"=>"HomeController@newslatter"])
  !!}
  <h2>Δεν θες να χάνεις ευκαιρία;</h2>
  <div class="input-group">
    {!! Form::email("email", null,
    ["class"=>"form-control","placeholder"=>"Βάλε το e-mail σου εδώ"])
    !!}

    <span class="input-group-btn">
      <button class="btn btn-info" type="submit">Εγγραφή</button>
    </span>
  </div>
  </form>
</div>