<?php include 'header.php'?>
        
<main>
            <h2>Hey, I just met you...</h2>
            <h3>But Call me, Definitely!</h3>
            <p>I would love to talk further to answer any questions, get a quote, or brainstorm projects together.  Please fill out the form and indicate your favorite mode of contact.  We can grab a coffee, email, or have a phone date! 
            </p>
            
        <img src="images/call.jpg" alt="call" class="call">
                     
 </main>
    
    
    <aside>
      <form action="formhandler.php" method="post">
         
   <fieldset>
       
        <label>Name</label>
         <input type="text" name="name">
       
        <label>Email</label> 
       <input type="email" name="email">
    
       
       <label>Project Interest</label> 
       <ul>
           <li><input type="checkbox" name="style[]" value="byop">Bring Your Own Piece</li>
           <li><input type="checkbox" name="style[]" value="rf">Refurbish</li>
           <li><input type="checkbox" name="style[]" value="rp">Repurpose</li>
           <li><input type="checkbox" name="style[]" value="upholstery">Upholstery</li>
           <li><input type="checkbox" name="style[]" value="cw">Consultant Work</li>
       </ul>
       
       <label>Best Contact Method</label>
       
       <select name="contact">
       <option value="email">Email</option>
       <option value="phone">Phone</option>
       <option value="text">Text</option>
       </select>
       
       
       <label>Anticipated Completion Date</label>
       <select name="months">
       <option value="Months">Month</option>
       <option value="January">January</option>
       </select>
       
       <select name="days">
       <option value="days">Day</option>
       <option value="1">1</option>
           </select>
       
       <select name="year">
       <option value="years">Year</option>
       <option value="1900">1900</option>
        
       </select>
       
       
       <label>Design Notes</label>
       <textarea name="comments"></textarea>
       
       <input type="submit" value="Let's Design!">
       
       
        </fieldset>

    </form>
      
        
    </aside>
    
    <?php include 'footer.php'?>