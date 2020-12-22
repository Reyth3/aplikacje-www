using MySql.Data.MySqlClient;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ASPNET.Data
{
    public class DatabaseConnection
    {
        private static string _connectionString = "Server=localhost;Database=ramen;Uid=root;Pwd=;";
        public static MySqlConnection Instance
        {
            get
            {
                return new MySqlConnection(_connectionString);
            }
        }
    }
}
