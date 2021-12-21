 
    // book add
function Cold(){
alert("Book added sucessfully!!");
}
// delete
function Cold(){
alert("Book deleted sucessfully!!");
}
//load image
var loadFile = function(event) {
var output = document.getElementById('output');
output.src = URL.createObjectURL(event.target.files[0]);
output.onload = function() {
URL.revokeObjectURL(output.src) // free memory
}
};