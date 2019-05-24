<?php
	class Song {

		private $con;
		private $id;
		private $mysqliData;
		private $title;
		private $artistId;
		private $albumId;
		private $path;
		private $duration;
		private $genre;


		public function __construct($con, $id) {
			$this->con = $con;
			$this->id = $id;

			$albumQuery = mysqli_query($this->con, "select * from songs where id = '$this->id' ");
			$this->mysqliData = mysqli_fetch_array($albumQuery);
			$this->title = $this->mysqliData['title'];
			$this->artistId = $this->mysqliData['artist'];
			$this->albumId = $this->mysqliData['album'];
			$this->genre = $this->mysqliData['genre'];
			$this->duration = $this->mysqliData['duration'];
			$this->path = $this->mysqliData['path'];
		}

		public function getTitle() {
			return $this->title;
		}

		public function getArist() {
			return new Artist($this->con, $this->artistId);
		}

		public function getAlbum() {
			return new getAlbum($this->con, $this->albumId);
		}

		public function getDuration() {
			return $this->duration;
		}

		public function getGenre() {
			return $this->genre;
		}

		public function getPath() {
			return $this->path;
		}
		public function getMysqliData() {
			return $this->mysqliData;
		}

	}
?>