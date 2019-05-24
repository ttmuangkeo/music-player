<?php
	class Album {

		private $con;
		private $id;
		private $title;
		private $genre;
		private $artworkPath;
		private $artistId;

		public function __construct($con, $id) {
			$this->con = $con;
			$this->id = $id;

			$albumQuery = mysqli_query($this->con, "select * from Albums where id = '$this->id' ");
			$album = mysqli_fetch_array($albumQuery);

			$this->title = $album['title'];
			$this->artistId = $album['artist'];
			$this->genre = $album['genre'];
			$this->artworkPath = $album['artworkPath'];

		}

		public function getTitle() {
			return $this->title;
		}
		public function getArtist() {
			return new Artist($this->con, $this->artistId);
		}		
		public function getArtworkPath() {
			return $this->artworkPath;
		}
		public function getGenre() {
			return $this->genre;
		}
		public function getNumberOfSong() {
			$albumQuery = mysqli_query($this->con, "select id from Songs where album = '$this->id' ");

			return mysqli_num_rows($albumQuery);
		}

		public function getSongId() {
			$albumQuery = mysqli_query($this->con, "select id from Songs where album='$this->id' order by albumOrder ASC");

			$array = array();

			while($row = mysqli_fetch_array($albumQuery)) {
				array_push($array, $row['id']);
			}
			return $array;
		}
	}
?>