<?php
	include 'travel-data.php'; 
	

	//function to display continent link
	function continentLinks($continents) {
		echo '<li class="list-group-item"><a href="#">' . $continents . '</a></li>';
	} 
	asort($continents);
	//function to display country link
	function countryLinks($countries) {
		echo '<li class="list-group-item"><a href="#">' . $countries . '</a></li>';
	} 
	asort($countries);
?>
 <div class="panel panel-default">
           <div class="panel-heading">Search</div>
           <div class="panel-body">
             <form>
               <div class="input-group">
                  <input type="text" class="form-control" placeholder="search ...">
                  <span class="input-group-btn">
                    <button class="btn btn-warning" type="button"><span class="glyphicon glyphicon-search"></span>          
                    </button>
                  </span>
               </div>  
             </form>
           </div>
         </div>  <!-- end search panel -->       
      
         <div class="panel panel-info">
           <div class="panel-heading">Continents</div>
           <ul class="list-group">  
			<?php
				//iterate through the Continent array then call the function to display the continent link
				foreach ($continents as $link) {
					continentLinks($link);
				}
			?>		 
           </ul>
         </div>  <!-- end continents panel -->  
         <div class="panel panel-info">
           <div class="panel-heading">Popular Countries</div>
           <ul class="list-group"> 

			<?php
				//iterate through the countries array then call the function to display the country link
				foreach ($countries as $link) {
					countryLinks($link);
				}
			?>	 
           </ul>
         </div>  <!-- end countries panel -->    