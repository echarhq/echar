<template>
	<ul class="list-group">
		<li v-show="loading" class="list-group-item"><i  class="fa fa-spinner fa-spin"></i> Loading data</li>
		<li class="list-group-item" v-for="memo in memos">
			{{ memo.memo }}
		</li>
	</ul>
</template>

<script>
	export default {
		data: function () {
			return {
				loading: false,
				memos: []
			}
		},
		mounted() {
			this.fetchMemos();
		},
		methods: {
			fetchMemos: function () {
				this.loading = true;
				this.$http.get('api/memos').then(function (response) {
					var res = this;
					setTimeout(function () {
						res.loading = false;
						res.memos = response.data;
					}, 300);
				}, function (response) {
					// error callbacks
				});
			}
		}
	}
</script>