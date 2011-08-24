var cci = cci || {};

cci.gallery = new Class({
	
	images: [],
	cover: null,
	active: null,
	
	initialize: function (gallery) {
		gallery = $$(gallery);
		this.images = gallery.getElements('li');
	
		this.cover = new Element('div', {
			'class': 'galleryShade'
		});
		this.cover.inject($$('body')[0]);
		
		this.images.each(function (image) {
			image.addEvent('click', this.open.bind(this, image));
		}, this);
	},
	
	open: function (image) {
		if (this.active) {
			this.close();
		}
		
		this.cover.setStyle('display', 'block');
		this.active = image
	},
	
	close: function() {
		if (active) {
			active = null;
		}
		
		this.cover.setStyle('display', 'none');
	}
});

window.addEvent('domready', function () {
	$$('ul.images').each(function (g) {
		var gallery = new cci.gallery(g);
	})
});