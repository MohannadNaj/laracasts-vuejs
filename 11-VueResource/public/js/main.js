Vue.component('tasks', {
	template: '#tasks-template',

	data: function() {
		return {
			list: []
		}
	},

	created: function() {
		this.fetchTasks();
	},

	methods: {
		fetchTasks: function() {

			/* direct get */
			this.$http.get('api/tasks')
			.then((tasks) => {
				this.list = tasks.body;
			});

			/* resource */
			var resource = this.$resource('api/tasks{/id}');

			resource.get()
			.then((tasks) => {
				this.list = tasks.body;
			});


		},
		remove: function(task) {
			this.list.$remove(task);
		}
	}

});

new Vue({
	el: 'body'
});