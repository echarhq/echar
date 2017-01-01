<template>
	<ul class="list-group" id="memo">
		<li v-show="loading" class="list-group-item"><i  class="fa fa-spinner fa-spin"></i> Loading data</li>
		<li class="list-group-item" v-for="memo in memos">
			{{ memo.memo }}
			<hr>
			<div class="memo-bottom">
				<span class="label label-default">Sunday - 21-04-1991</span>
			</div>
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
					}, 500);
				}, function (response) {
					// error callbacks
				});
			}
		}
	}
</script>