var fullImgBox = document.getElementById("fullImgBox");
var fullImg = document.getElementById("fullImg");

function openFullImg(pic) {
  fullImgBox.style.display = "flex";
  fullImg.src = pic;
}

function closeFullImg() {
  fullImgBox.style.display = "none";
}

function validasi() {
  var nama = document.getElementById("nama").value;
  var email = document.getElementById("email").value;
  
  if (nama != "" && email!="") {
    return true;
      }
      else{
    alert('Mohon isi data dengan lengkap');
  }
}