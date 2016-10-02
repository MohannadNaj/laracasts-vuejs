Vue.component('tasks', {
	template: '#tasks-template',

	data: function() {
		return {
			list: []
		}
	},

	created: function() {
		var vm = this;
		$.getJSON('api/tasks', function(tasks){
			vm.list = tasks;
		});
	},

	methods: {
		remove: function(task) {
			this.list.$remove(task);
		}
	}

});

new Vue({
	el: 'body'
});