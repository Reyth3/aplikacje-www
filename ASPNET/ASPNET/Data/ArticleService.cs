using ASPNET.Data.Models;
using MySql.Data.MySqlClient;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ASPNET.Data
{
    public class ArticleService
    {
        public List<Article> ListAllArticles()
        {
            var db = DatabaseConnection.Instance;
            db.Open();
            var cmd = new MySqlCommand("SELECT * FROM artykuly;", db);
            var reader = cmd.ExecuteReader();
            var articles = new List<Article>();
            while (reader.Read())
            {
                var id = reader.GetInt32(0);
                var title = reader.GetString(1);
                var content = reader.GetString(2);
                var thumb = reader.GetString(3);
                var createdat = reader.GetDateTime(4);
                var uId = reader.GetInt32(5);
                var art = new Article()
                {
                    Id = id,
                    UserId = uId,
                    CreatedAt = createdat,
                    Content = content,
                    Thumbnail = thumb,
                    Title = title
                };
                articles.Add(art);
            }
            return articles;
        }
    }
}
