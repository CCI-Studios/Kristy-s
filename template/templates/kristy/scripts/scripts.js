(function () {
	window.addEvent('domready', function () {
		var images = $$('img');
		
		images.each(function (image) {
			var normal, over;
			normal = image.src;
			over = normal.replace('_normal.', '_over.');
			
			// skip if not existing
			if (normal == over) {
				return;
			}
			
			Asset.image(over, {
				onLoad: function () {
					image.addEvents({
						mouseover: function () {
							image.src = over;
						},
						mouseleave: function () {
							image.src = normal;
						}
					})
				}
			});
			
		});
	});
}())