lastCat = "audio";

function loadFeatures(cat) {
  file = "features_new.php?c="+cat;
  $("cat-"+lastCat).className="feature-cat";
  $("cat-"+cat).className="feature-cat-sel";
  lastCat = cat;
  new Effect.Opacity('feature-list', { 
    from: 1.0,
    to: 0.0,
    duration: 0.5
  });
  window.setTimeout("doLoadFeatures(file)",500);
}
function doLoadFeatures(file) {
  new Ajax.Updater('feature-list', file, {
        onComplete: showFeatureList()
  });
}
function showFeatureList() {
  new Effect.Opacity('feature-list', {
    from: 0.0,
    to: 1.0
  });
}