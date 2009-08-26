var tab = "vlc";

function openTab(id) {
  try {
    document.getElementById("tab-"+tab).className = "";
    document.getElementById("pres-"+tab).style.display = "none";
    document.getElementById("tab-"+id).className = "active";
    document.getElementById("pres-"+id).style.display = "none";
    tab = id;
  } catch(ex) {
    window.alert(ex);
  }  
}