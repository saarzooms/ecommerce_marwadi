class CreateContactsTable extends Migration
{
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}