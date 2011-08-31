var cci = cci || {};

cci.gallery = new Class({
	
	images: [],
	cover: null,
	active: null,
	
	coverFx: null,
	imageFx: null,
	
	initialize: function (gallery) {
		gallery = $$(gallery);
		this.images = gallery.getElements('li');
	
		this.cover = new Element('div', {
			'class': 'galleryShade'
		});
		this.cover.inject($$('body')[0]);
		this.cover.addEvent('click', this.close.bind(this));
		this.coverFx = new Fx.Morph(this.cover, {
			onStart: function () {
				if (this.from.opacity[0].value == 0) {
					this.element.setStyle('display', 'block');
				}
			},
			onComplete: function () {
				if (this.from.opacity[0].value == 0.7) {
					this.element.setStyle('display', 'none');
				}
			}
		});
		
		this.images.each(function (image) {
			image.addEvent('click', this.open.bind(this, image));
		}, this);
	},
	
	open: function (image) {
		if (this.active) {
			this.close();
		}
		
		this.coverFx.start({
			opacity: 0.7
		});
		this.active = image;
	},
	
	close: function() {
		this.active = null;
		
		this.coverFx.start({
			opacity: 0
		});
	}
});

window.addEvent('domready', function () {
	$$('ul.images').each(function (g) {
		// var gallery = new cci.gallery(g);
	})
});