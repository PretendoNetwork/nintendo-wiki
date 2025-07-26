$(document).ready(function () {
	$('.tab-container').each(function () {
		const container = $(this);
		const storageKey = container.data('storage-key');
		const activeTab = localStorage.getItem(`tab-${storageKey}`) || container.find('.tab-header').first().data('tab');

		showTab(container, activeTab);

		container.find('.tab-header').click(function () {
			const name = $(this).data('tab');
			showTab(container, name);

			if (storageKey) {
				localStorage.setItem(`tab-${storageKey}`, name);
			}
		});
	});
});

function showTab(container, name) {
	container.find('.tab-content').hide();
	container.find('.tab-header').removeClass('active');

	container.find(`.tab-content[data-tab-name="${name}"]`).show();
	container.find(`.tab-header[data-tab="${name}"]`).addClass('active');
}