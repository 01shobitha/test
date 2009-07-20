lastCat = "input";

function openFeatures(cat) {
  if($("cat-"+lastCat)!=null) $("cat-"+lastCat).className="feature-cat";
  if($("cat-"+cat)!=null) $("cat-"+cat).className="feature-cat-sel";
  new Effect.BlindUp("feature-div", {duration: 1.0, queue: 'end' });    
  new Ajax.Updater('feature-div', '/vlc/features.php?cat='+cat, {
    onSuccess: function(transport) {
      new Effect.BlindDown("feature-div", {duration: 1.0, queue: 'end' });
    }
  });  
  lastCat = cat;
}