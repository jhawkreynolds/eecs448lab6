function validateForm()
{
    let chessset = document.getElementById("chessset");
    if(chessset.value == "" || chessset.value < 0)
    {
        alert("Invalid quantity selected for Chess Sets!");
    }
    let airfryer = document.getElementById("airfryer");
    let grandpiano = document.getElementById("grandpiano");
    let fuzzysocks = document.getElementById("fuzzysocks");
    return false;
}