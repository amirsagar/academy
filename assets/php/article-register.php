<h2>Registration form</h2>
<p>Please complete the form below</p>

<form class="form-horizontal" role="form">
  <fieldset class="pesonalinfo">
    <legend>Personal Info</legend>
  
  <section class="row">
     <label class="col-lg-4  control-label"for="name">Name</label>
     <div class="controls">
       <input class="col-lg-8 control-label"type="text" name="name" id="name" autofocus placeholder="last, first" required>
     </div>
    
  </section>
  <br><section class="row">
<label for="inputEmail1" class="col-lg-4 control-label">Email</label>     <div class="controls">
       <input class="col-lg-8 control-label"type="email" name="email" id="name" placeholder="email" required>
     </div>
    
  </section>
</fieldset>
  <fieldset class="other">
    <legend>Other Info</legend>
  
  
    <section>
    <label class="col-lg-4  control-label"for="name">Request Type</label>
    <div class="controls col col-lg-8">
    <div class="radio">
  <label>
    <input type="radio" name="optionsRadios" id="optionsRadios1" value="Question" checked>
   Question
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="optionsRadios" id="optionsRadios2" value="Comment">
    Comment
  </label>
</div>
</div>
  </section>
   <br>
<section class="row">

    <label class="col col-lg-4 control-label">Subscribe</label>
    <div class="controls col col-lg-8">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Would you lik to subscribe?
        </label>
      </div>
  </div>
</section>
<br>
<section class="row">
 <label class="col col-lg-4 control-label">How did you hear about us?</label>
 <div class="col col-lg-8 ">
  <select name="reference" id="">
    <option value=""> ----Choose----</option>
    <option value="">Friend</option>
    <option value="">Social Media</option>
    <option value="">Other</option>
  </select>
</div> 
</section>
<br>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-success btn-lg">Submit</button>
    </div>
  </div>
</fieldset>
</form>
