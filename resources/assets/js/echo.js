import Bus from './bus'

Echo.join('chat')
	.here((users) => {
		Bus.$emit('users.here', users)
		console.log("test")
	})
	.joining((user) => {
		Bus.$emit('users.joined', user)

	})
	.leaving((user) => {
		Bus.$emit('users.left', user)
	})
	.listen('chat.MessageCreated', (e) => {
		Bus.$emit('messages.added', e.message);
	});