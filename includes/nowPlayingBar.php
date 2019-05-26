<?php 
$songQuery = mysqli_query($con, "select * from songs order by rand() limit 10");

$resultArray = array();

while($row = mysqli_fetch_array($songQuery)) {
   array_push($resultArray, $row['id']);
}

$jsonArray = json_encode($resultArray);
 ?>


<div id="nowPlayingBarContainer">
   <div id="nowPlayingBars">
      <div id="nowPlayingLeft">
         <div class="content">
            <span class="albumLink">
            <img class="albumArtwork" src="https://i.ytimg.com/vi/rb8Y38eilRM/maxresdefault.jpg" alt="">
            </span>
            <div class="trackInfo">
               <span class="trackName">
               <span>a millie</span>
               </span>
               <span class="artistName">
               <span>lil wayne</span>
               </span>
            </div>
         </div>
      </div>
      <div id="nowPlayingCenter">
         <div class="content playerControls">
            <div class="buttons">
               <button class="controlButton shuffle" title="shuffle button">
               <img src="assets/images/icons/shuffle.png" alt="shuffle">
               </button>
               <button class="controlButton prev" title="prev button">
               <img src="assets/images/icons/prev.png" alt="prev">
               </button>
               <button class="controlButton play" title="play button">
               <img src="assets/images/icons/play.png" alt="play">
               </button>
               <button class="controlButton pause" title="pause button" style="display:none;">
               <img src="assets/images/icons/pause.png" alt="pause">
               </button>
               <button class="controlButton next" title="next button">
               <img src="assets/images/icons/next.png" alt="next">
               </button>
               <button class="controlButton repeat" title="repeat button">
               <img src="assets/images/icons/repeat.png" alt="repeat">
               </button>
            </div>
            <div class="playbackBar">
               <span class="progressTime current">0.00</span>
               <div class="progressBar">
                  <div class="progressBarBg">
                     <div class="progress"></div>
                  </div>
               </div>
               <span class="progressTime remaining">0.00</span>
            </div>
         </div>
      </div>
      <div id="nowPlayingRight">
         <div class="volumeBar">
            <button class="controlButton volume" title="Volume button">
            <img src="assets/images/icons/volume.png" alt="Volume">
            </button>
            <div class="progressBar">
               <div class="progressBarBg">
                  <div class="progress"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>