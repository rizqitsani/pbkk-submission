using System.Data.Entity;

namespace LatihanMVVM
{

    [DbConfigurationType(typeof(MySql.Data.Entity.MySqlEFConfiguration))]
    class LatihanContext : DbContext
    {
        public DbSet<ItemPenjualan> DaftarItemPenjualan { get; set; }
    }
}