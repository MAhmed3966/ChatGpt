<form class="p-4 flex space-x-4 justify-center items-center" action="/" method="post">
    @csrf
    <label for="message">Laravel Question:</label>
    <input id="message" type="text" name="message" autocomplete="off" class="border rounded-md  p-2 flex-1" />
    <a class="bg-gray-800 text-white p-2 rounded-md" href="/reset">Reset Conversation</a>
</form>