lastCat = "audio";

function loadFeatures(cat) {
  file = "features_new.php?c="+cat;
  $("cat-"+lastCat).className="feature-cat";
  $("cat-"+cat).className="feature-cat-sel";
  lastCat = cat;
  /*new Effect.Opacity('feature-list', { 
    from: 1.0,
    to: 0.0,
    duration: 0.5
  });
  window.setTimeout("doLoadFeatures(file)",500);*/
  loadFeaturesUnanimated(file);
}
function doLoadFeatures(file) {
  new Ajax.Updater('feature-list', file, {
        onComplete: showFeatureList()
  });
}
function loadFeaturesUnanimated(file) {
  new Ajax.Updater('feature-list', file);
}
function showFeatureList() {
  new Effect.Opacity('feature-list', {
    from: 0.0,
    to: 1.0,
    duration: 0.5
  });
}

function openFeatures(cat) {
  if($("cat-"+lastCat)!=null) $("cat-"+lastCat).className="feature-cat";
  if($("cat-"+cat)!=null) $("cat-"+cat).className="feature-cat-sel";
  if($("feature-list-"+lastCat!=null) {
    new Effect.BlindUp("feature-list-"+lastCat, {duration: 1.0, queue: 'end' });
  }
  if($("feature-list-"+cat!=null) {
    new Effect.BlindDown("feature-list-"+cat, {duration: 1.0, queue: 'end' });
  }
  lastCat = cat;
}