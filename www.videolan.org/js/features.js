function openFeatures(cat) {
  new Effect.BlindUp("feature-div", {duration: 1.0, queue: 'end' });    
  new Ajax.Updater('feature-div', '/vlc/features.php?cat='+cat, {
    onSuccess: function(transport) {
      new Effect.BlindDown("feature-div", {duration: 1.0, queue: 'end' });
    }
  });  
}