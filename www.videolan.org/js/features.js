lastCat = "input";

function openFeatures(cat) {
  if($("cat-"+lastCat)!=null) $("cat-"+lastCat).className="feature-cat";
  if($("cat-"+cat)!=null) $("cat-"+cat).className="feature-cat-sel";
  if($("feature-list-"+lastCat)!=null) {
    new Effect.BlindUp("feature-list-"+lastCat, {duration: 1.0, queue: 'end' });
  }  
  lastCat = cat;
  new Ajax.Updater('feature-div', '/vlc/features.php?fdiv='+cat, {
    onSuccess: function(transport) {
      if($("feature-list-"+cat)!=null) {
        new Effect.BlindDown("feature-list-"+cat, {duration: 1.0, queue: 'end' });
      }
    }
  });  
}